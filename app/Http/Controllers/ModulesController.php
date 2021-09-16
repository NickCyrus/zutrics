<?php

namespace App\Http\Controllers;

use App\Models\modulesapp;
use App\Http\Controllers\LoginAdmin;
use App\Http\Controllers\UserController;
use DB;
use Tools;


use Illuminate\Http\Request;

class ModulesController extends Controller
{

    var $slug     = 'modules';
    var $idApp    = 1;
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
         $this->infoApp = Modulesapp::where('id', $this->idApp)->get();
    }

    public function index()
    {
        $this->run();
        $datos = modulesapp::paginate(30);
        return view($this->slug.'.index', ['modules'=> $datos , 'infoApp' =>  $this->infoApp[0] , 'permisos'=> $this->permisos[0] ]  );
    }


    public function create()
    {
        $this->run();
        $modulo   = new modulesapp;
        return view($this->slug.'.create', ["modules"=>$modulo , 'infoApp' =>  $this->infoApp[0] , 'permisos'=> $this->permisos[0] ] );
    }


    public function store(Request $request)
    {
            $datos = $request->except('_token');
            $request->validate([
                'nameapp'=>['required', 'min:5'],
                'urlapp'=>['required','unique:ZE_modulesapps']
            ]);
            modulesapp::insert($datos);
            UserController::log("Creo el módulo {$datos['nameapp']} ",'insert');
            return redirect($this->slug.'/');
    }


    public function show(modulesapp $modules){}


    public function edit($id)
    {
        $this->getOptionMenu();
        $datos = modulesapp::find($id);
        return view($this->slug.'.edit', ["modules"=>$datos, 'infoApp' =>  $this->infoApp[0] ] );
    }


    public function update(Request $request, $id)
    {
        $datos = $request->except('_token','_method');

        $request->validate([
            'nameapp'=>'required|min:5',
            'urlapp'=>'required|unique:ac_modulesapps,urlapp,'.$id
        ]);

        modulesapp::where('id','=',$id)->update($datos);
        UserController::log("Actualizo el módulo ".Tools::getInfoTableByIdField('modulesapp',$id, 'nameapp')." con ID => {$id}",'update');
        return redirect($this->slug.'/');
    }

    public function destroy($id)
    {
          UserController::log("Elimino el módulo ".Tools::getInfoTableByIdField('modulesapp',$id, 'nameapp')." con ID => {$id}",'delete');
          modulesapp::destroy($id);
          return redirect($this->slug.'/');
    }

}
