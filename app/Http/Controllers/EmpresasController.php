<?php

namespace App\Http\Controllers;

use App\Models\enterprise;
use Illuminate\Http\Request;
use DB;
use Tools;
use Auth;
use App\Models\modulesapp;
use App\Models\User;
use App\Models\enterprise_rel;
use App\Models\permission;
use App\Models\profpermission;
use Illuminate\Support\Facades\Config;


class EmpresasController extends Controller{

    var $slug     = 'empresas';
    var $idApp    = 4;
    var $infoApp  = '';
    var $permisos = '';
    var $currenUser = '';

    function run(){
        $this->getOptionMenu();
        $this->getAccessApp();
        $this->currenUser  = Auth::user();
    }

    function getAccessApp($mode = 'all'){
        $user     = new LoginAdmin();
        $this->permisos = $user->accessModule($this->idApp);
        return (count($this->permisos)) ? $this->permisos : false;
    }

    function getOptionMenu(){
        $this->infoApp = modulesapp::where('id', $this->idApp)->get();
    }

    public function index(){

        $this->run();

        $datos = enterprise::paginate( Tools::paginacion() );

        return view($this->slug.'.index', ["modules"=>$datos ,
                                           "permisos"=>$this->permisos[0] ,
                                           "buscador"=>'',
                                           "infoApp"=>$this->infoApp[0]]);

    }

    public function create(){
            $this->run();
            $enterprise = new enterprise;
            return view($this->slug.'.create', ["modules"=>$enterprise,"permisos"=>$this->permisos[0] , "infoApp"=>$this->infoApp[0]] );
    }


    public function store(Request $request){

            $request->validate([
                'NIT'=>['required','unique:nit']
            ]);

            $this->run();

            $datos = $request->except('_token');
            $args = [
                     "USUARIO"=> $this->currenUser->id,
                     "F_ACTUAL"=>now(),
                     "PROGRAMA"=> Config::get('constante.PROGRAMA'),
                     "DESCRIPCION"=>$datos['DESCRIPCION'],
                     "NIT"=>$datos['NIT'],
                     "F_VALIDEZ"=>$datos['F_VALIDEZ'],
                     "COD_EMP_REL"=>$datos['COD_EMP_REL'],
                     ];

           $id    = enterprise::insertGetId($args);
           UserController::log("Creo la EMPRESA ".Tools::getInfoTableByIdField('enterprise',$id, 'DESCRIPCION')." con ID => {$id}",'update');
           return $this->index();

    }

    public function show(ZE_EMPRESA $modules){
        //
    }

    public function edit($id){
        $this->getOptionMenu();
        $datos = enterprise::find($id);
        return view($this->slug.'.edit', ["modules"=>$datos, 'infoApp' =>  $this->infoApp[0] ] );
    }

    public function update(Request $request, $id){
        $datos = $request->except(['_token','_method']);

        $request->validate([
            'NIT'=>['required','exists:ZE_EMPRESA,NIT']
        ]);

        $this->run();

        $args = [
            "USUARIO"=> $this->currenUser->id,
            "F_ACTUAL"=>now(),
            "PROGRAMA"=> Config::get('constante.PROGRAMA'),
            "DESCRIPCION"=>$datos['DESCRIPCION'],
            "NIT"=>$datos['NIT'],
            "F_VALIDEZ"=>$datos['F_VALIDEZ'],
            "COD_EMP_REL"=>$datos['COD_EMP_REL'],
            ];
        enterprise::where('ID_EMP','=',$id)->update($args);
        UserController::log("Actualizo la ZE EMPRESA ".Tools::getInfoTableByIdField('enterprise',$id, 'DESCRIPCION')." con ID => {$id}",'update');
        return redirect($this->slug.'/');
    }


    public function destroy($id) {
        UserController::log("Elimino la ZE EMPRESA ".Tools::getInfoTableByIdField('enterprise',$id, 'DESCRIPCION')." con ID => {$id}",'delete');
        enterprise::destroy($id);
        return redirect($this->slug.'/');
    }

    public function buscador(Request $request){


        $this->run();
        DB::enableQueryLog();
        $datos = enterprise::orWhere("NIT","like","%{$request->buscador}%")
                    ->orWhere("DESCRIPCION","like","%{$request->buscador}%")
                    ->orWhere("COD_EMP_REL","like","%{$request->buscador}%")->paginate( Tools::paginacion() );

        return view($this->slug.'.index', ["modules"=>$datos ,
                                           "permisos"=>$this->permisos[0] ,
                                           "infoApp"=>$this->infoApp[0],
                                           "buscador"=>$request->buscador]);


    }

}
