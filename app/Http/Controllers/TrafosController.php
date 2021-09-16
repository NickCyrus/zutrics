<?php

namespace App\Http\Controllers;

use App\Models\ZE_TRAFOS;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use DB;
use Auth;

class TrafosController extends Controller
{

    var $slug     = 'trafos';
    var $idApp    = 6;
    var $infoApp  = '';
    var $permisos = '';

    function getAccessApp($mode = 'all'){
        $user     = new LoginAdmin();
        $this->permisos = $user->accessModule($this->idApp);
        return (count($this->permisos)) ? $this->permisos : false;
    }

    function getOptionMenu(){
        $this->infoApp = DB::table('modulesapps')->where('id', $this->idApp)->get();
    }

    public function getName($id){
        $PerfilName = ZE_TRAFOS::find($id);
        return trim($PerfilName->NOMBRE_TRAFO);
    }

    public function index(){

        if (!$this->getAccessApp() || $this->permisos[0]->aview == 0) return redirect()->route('errorAccess');
        $this->getOptionMenu();

        $empresaid = Auth::user()->empresaid;

        if ($empresaid){
                $sql  = "SELECT ZE_TRAFOS.*  , ZE_ZONAS_ESPECIALES.NOMBRE_ZE , users.name
                         FROM ZE_ZONAS_ESPECIALES , ZE_TRAFOS
                         LEFT JOIN  users ON    ZE_TRAFOS.USUARIO = CONVERT(varchar, users.id)
                         WHERE ZE_ZONAS_ESPECIALES.ID_ZE = ZE_TRAFOS.ID_ZE AND ZE_ZONAS_ESPECIALES.ID_EMP = $empresaid
                        ";
        }else{
                $sql  = "SELECT ZE_TRAFOS.*  , ZE_ZONAS_ESPECIALES.NOMBRE_ZE , users.name
                        FROM ZE_TRAFOS
                        LEFT JOIN  users ON    ZE_TRAFOS.USUARIO = CONVERT(varchar, users.id)
                        LEFT JOIN  ZE_ZONAS_ESPECIALES ON    ZE_ZONAS_ESPECIALES.ID_ZE = ZE_TRAFOS.ID_ZE ";
        }

         $datos = DB::select($sql);

         return view($this->slug.'.index', ['modules'=> $datos , 'infoApp' =>  $this->infoApp[0] , 'permisos'=> $this->permisos[0] , 'empresaSelect'=>$empresaid  ]  );
    }

    public function create(){
        if (!$this->getAccessApp() || $this->permisos[0]->anew == 0 ) return redirect()->route('errorAccess');
        $this->getOptionMenu();
        return view($this->slug.'.create', ['infoApp' =>  $this->infoApp[0] , 'permisos'=> $this->permisos[0] , 'isnew'=>true ] );
    }

    public function store(Request $request){

            if (!$this->getAccessApp() || $this->permisos[0]->anew == 0) return redirect()->route('errorAccess');
            $datos = $request->except('_token');

            $args = [
                        "USUARIO"=>Auth::user()->id,
                        "F_ACTUAL"=>date("Y-m-d"),
                        "PROGRAMA"=>'WEB',
                        "NOMBRE_TRAFO"=>$request->NOMBRE_TRAFO,
                        "ID_ZE"=>$request->ID_ZE
                    ];

            ZE_TRAFOS::insert($args);
            UserController::log("Creo el registro en ZE_TRAFOS - {$request->NOMBRE_TRAFO} para ID_ZE => {$request->ID_ZE} ",'insert');
            return redirect($this->slug.'/');

    }

    public function show(ZE_TRAFOS $modules){

    }



    public function edit($id){
        $datos['modules'] = ZE_TRAFOS::find($id);
        return view($this->slug.'.edit', $datos );
    }

    public function update(Request $request, $id){
        if (!$this->getAccessApp() || $this->permisos[0]->aedit == 0 ) return redirect()->route('errorAccess');
        $datos = $request->except('_token','_method');


        $args = [
            "USUARIO"=>Auth::user()->id,
            "F_ACTUAL"=>date("Y-m-d"),
            "PROGRAMA"=>'WEB',
            "NOMBRE_TRAFO"=>$request->NOMBRE_TRAFO,
            "ID_ZE"=>$request->ID_ZE
        ];

        ZE_TRAFOS::where('ID_TRAFO','=',$id)->update($args);
        UserController::log("Actualizo el registro en ZE_TRAFOS ".$this->getName($id)." con ID => {$id}",'update');
        return redirect($this->slug.'/');
    }


    public function destroy($id) {
        if (!$this->getAccessApp() || $this->permisos[0]->adelete == 0 ) return redirect()->route('errorAccess');
        UserController::log("Elimino el registro en ZE_TRAFOS ".$this->getName($id)." con ID => {$id}",'delete');
        ZE_TRAFOS::destroy($id);
        return redirect($this->slug.'/');
    }
}
