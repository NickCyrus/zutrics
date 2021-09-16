<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;
use App\Models\modulesapp;
use App\Models\profpermission;
use App\Http\Controllers\UserController;
use Carbon\Carbon;
use DB;
use Tools;

class PerfilesController extends Controller
{

    var $slug     = 'perfiles';
    var $idApp    = 2;
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

    function getOptionMenu(){
         $this->infoApp = modulesapp::where('id', $this->idApp)->get();
    }

    public function index()
    {
        $this->run();
        $datos = profile::paginate(Tools::paginacion());
        return view($this->slug.'.index', ['modules'=> $datos , 'infoApp' =>  $this->infoApp[0] , 'permisos'=> $this->permisos[0] ]  );
    }

    public function create()
    {
        $this->run();
        $modulo   = modulesapp::all();
        $modules  = new profile;
        return view($this->slug.'.create', ['modules'=>$modules,'infoApp' =>  $this->infoApp[0] , 'permisos'=> $this->permisos[0], 'modolosapp'=> $modulo ] );
    }

    public function exist($perfil , $id =''){

            if (!isset($id))
                $modulos = profile::where('profname',$perfil)->get();
            else
                $modulos = profile::where('profname',$perfil)->where('id','<>',$id)->get();

             return (count($modulos)) ? json_encode(array("rs"=>1)) : json_encode(array("rs"=>0));
    }

    public function store(Request $request)
    {

            $datos  = $request->except('_token');

            $request->validate([
                'profname'=>['required','min:5','unique:ac_profiles']
            ]);

            $id     = profile::insertGetId( ['profname'=>$datos['profname'] , "created_at"=>Carbon::now()] );

            $modulos = modulesapp::get();

            if ($modulos){
                foreach($modulos as $modulo){
                    profpermission::insert(["created_at"=>Carbon::now(),
                                            "profid"=>$id,
                                            "modappid"=>$modulo->id,
                                            "aview"=>( isset($datos['actionView'][$modulo->id]) ? $datos['actionView'][$modulo->id] : 0),
                                            "anew"=>(isset($datos['actionNew'][$modulo->id]) ? $datos['actionNew'][$modulo->id] : 0),
                                            "aedit"=>(isset($datos['actionEdit'][$modulo->id]) ? $datos['actionEdit'][$modulo->id] : 0),
                                            "adelete"=>(isset($datos['actionDele'][$modulo->id]) ? $datos['actionDele'][$modulo->id] : 0) ]);
                }
            }

            UserController::log("Creo el perfil {$datos['profname']} ",'insert');

            return redirect($this->slug.'/');
    }


    public function show(profile $modules){}

    public static function selectPerfiles($empresaID = '' , $required = ''){

        $empresas = profile::get();

        if ($empresas){
            foreach($empresas as $empresa){
                $items[$empresa->id] = $empresa->profname;
            }
        }

        return view('component.select',["items" =>$items, "value"=>$empresaID, "nameField"=>'profid' , 'required'=>$required ]);


    }

    public function edit($id)
    {
        $this->run();
        $datos         = profile::find($id);
        $List_permisos = array();

        $sql =  "SELECT ac_modulesapps.* , aview  , anew , aedit , adelete   FROM ac_modulesapps
                 LEFT JOIN ac_profpermissions ON ac_modulesapps.id = ac_profpermissions.modappid AND ac_profpermissions.profid = {$id} ";

        $permisos = DB::select($sql);


        if (count($permisos)){
            $i = 1;
            foreach($permisos as $permiso){
                $List_permisos[$permiso->id] = array("aview"=>$permiso->aview,
                                                 "anew"=>$permiso->anew,
                                                 "aedit"=>$permiso->aedit,
                                                 "adelete"=>$permiso->adelete);
                $i++;
            }
        }

        return view($this->slug.'.edit', ['modules'=> $datos,
                                          'modolosapp'=> $permisos ,
                                          'infoApp' =>  $this->infoApp[0] ,
                                          'permisos'=> $this->permisos[0],
                                          'permod'=>$List_permisos]
                                        );
    }


    public function update(Request $request, $id)
    {

        $datos = $request->except('_token','_method');

        $request->validate([
            'profname'=>['required','min:5','unique:ac_profiles,profname,'.$id]
        ]);


        profile::where('id','=',$id)->update(['profname'=>$datos['profname'] , "updated_at"=>Carbon::now()]);
        $modulos = modulesapp::get();

            if ($modulos){
                foreach($modulos as $modulo){
                    profpermission::updateOrInsert(
                                            ["profid"=>$id,"modappid"=>$modulo->id],
                                            ["created_at"=>Carbon::now(),
                                             "aview"=>( isset($datos['actionView'][$modulo->id]) ? $datos['actionView'][$modulo->id] : 0),
                                             "anew"=>(isset($datos['actionNew'][$modulo->id]) ? $datos['actionNew'][$modulo->id] : 0),
                                             "aedit"=>(isset($datos['actionEdit'][$modulo->id]) ? $datos['actionEdit'][$modulo->id] : 0),
                                             "adelete"=>(isset($datos['actionDele'][$modulo->id]) ? $datos['actionDele'][$modulo->id] : 0)]
                                            );
                }
            }

        UserController::log("Actualizo el perfil {$datos['profname']} ",'update');
        return redirect($this->slug.'/');
    }

    public function destroy($id)
    {
        UserController::log("Elimino el perfil ".Tools::getInfoTableByIdField('profile',$id, 'nameapp')." con ID => {$id}",'delete');
        profile::destroy($id);
        return redirect($this->slug.'/');
    }
}
