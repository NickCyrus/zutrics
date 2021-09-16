<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use DB;
use Auth;
use Tools;

use App\Models\modulesapp;
use App\Models\User;
use App\Models\enterprise_rel;
use App\Models\permission;
use App\Models\profpermission;

class UsuariosController extends Controller
{

    var $slug     = 'usuarios';
    var $idApp    = 3;
    var $infoApp  = '';
    var $permisos = '';


    function run(){
        $this->getOptionMenu();
        $this->getAccessApp();
    }

    function getAccessApp($mode = 'all'){
        $user     = new LoginAdmin();
        $this->permisos = $user->accessModule($this->idApp);
        return (count($this->permisos)) ? $this->permisos : false;
    }

    public function exist($email , $id =''){

        if (!isset($id))
            $modulos = User::where('email',$email)->get();
        else
            $modulos = User::where('email',$email)->where('id','<>',$id)->get();

         return (count($modulos)) ? json_encode(array("rs"=>1)) : json_encode(array("rs"=>0));
    }


    public function getName($id){
        $PerfilName = User::find($id);
        return $PerfilName->name;
    }

    function getOptionMenu(){
         $this->infoApp = modulesapp::where('id', $this->idApp)->get();
    }

    public function index()
    {
        $this->run();

        $datos = DB::table('ac_users')
                        ->leftJoin('ac_profiles','ac_users.profid','ac_profiles.id')
                        ->select('ac_users.*', 'profname',
                         DB::raw('( CASE
                         WHEN (SELECT COUNT(id) FROM ac_enterprise_rels WHERE ac_enterprise_rels.userid = ac_users.id) = 1 THEN  (SELECT rs FROM ac_enterprise_rels, ac_enterprises WHERE ac_enterprise_rels.userid = ac_users.id AND ac_enterprise_rels.enterpid = ac_enterprises.id )
                         WHEN (SELECT COUNT(id) FROM ac_enterprise_rels WHERE ac_enterprise_rels.userid = ac_users.id) > 1 THEN  (SELECT CONCAT(COUNT(id),\' Empresas asociadas \') FROM ac_enterprise_rels WHERE ac_enterprise_rels.userid = ac_users.id)
                         ELSE \'Sin empresa\' END) AS empresas')
                 )->paginate(Tools::paginacion());

        // $datos =User::paginate( Tools::paginacion());

         return view($this->slug.'.index', ['modules'=> $datos , 'infoApp' =>  $this->infoApp[0] , 'permisos'=> $this->permisos[0] ]  );
    }


    public function create()
    {
        $this->run();
        $datos = new User;
        return view($this->slug.'.create', ["empresas"=>'',"modules"=>$datos, 'infoApp' =>  $this->infoApp[0] , 'permisos'=> $this->permisos[0] , 'isnew'=>true ] );
    }


    public function store(Request $request)
    {
            $this->run();

            $request->validate([
                'password'=>'required|min:6',
                'email'=>'required|unique:ac_users'
            ]);

            $datos = $request->except('_token');

            $args = [
                        "name"=>$datos['name'],
                        "email"=>$datos['email'],
                        "profid"=>$datos['profid'],
                        "password"=>bcrypt($datos['password']),
                        "created_at"=>Carbon::now()
                    ];


            $id = User::insertGetId($args);

            if (isset($datos['empresas'])){
                foreach($datos['empresas'] as $emp){
                    enterprise_rel::insert(["userid"=>$id,"enterpid"=>$emp]);
                }
            }
            permission::insert( ['userid'=>$id, 'profid'=>$datos['profid']] );
            UserController::log("Creo el usuario {$datos['name']} {$datos['email']} con ID=>{$id} ",'insert');
            return redirect($this->slug.'/');
    }


    public function show(modulesapp $modules)
    {
        //
    }

    function getEmpresasUser($id){

            $empreas = enterprise_rel::where('userid', $id)->get();
            if (count($empreas)){
                    foreach($empreas as $empresa){
                        $lista[] = $empresa->enterpid;
                    }
                    return $lista;
            }else
                return '';
    }

    public function edit($id)
    {
        $this->run();
        $datos = User::find($id);
        $empresas = $this->getEmpresasUser($id);
        return view($this->slug.'.edit', ["modules"=>$datos, 'infoApp' =>  $this->infoApp[0] , 'empresas' => $empresas ] );
    }


    public function update(Request $request, $id)
    {


        $this->run();

        $request->validate([
            'email'=>'required|exists:ac_users,email'
        ]);

        $datos = $request->except('_token');

        $args = [
            "name"=>$datos['name'],
            "email"=>$datos['email'],
            "profid"=>$datos['profid'],
            "updated_at"=>Carbon::now()
        ];

        if ($datos['password']){
            $args["password"]=bcrypt($datos['password']);
        }

        if (isset($datos['empresas'])){
            enterprise_rel::where('userid', $id)->delete();
            foreach($datos['empresas'] as $emp){
                enterprise_rel::insert(["userid"=>$id,"enterpid"=>$emp]);
            }
        }

        User::where('id','=',$id)->update($args);
        permission::where('userid','=',$id)->update(['profid'=>$datos['profid']]);
        UserController::log("Actualizo el usuario ".$this->getName($id)." con ID => {$id}",'update');
        return redirect($this->slug.'/');

    }

    public function destroy($id)
    {
          $this->run();
          UserController::log("Elimino el usuario ".$this->getName($id)." con ID => {$id}",'delete');
          User::destroy($id);
          return redirect($this->slug.'/');
    }


}
