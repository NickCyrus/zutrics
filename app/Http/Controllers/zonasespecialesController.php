<?php

namespace App\Http\Controllers;

use App\Models\ZE_ZONAS_ESPECIALES;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use DB;
use Auth;

class zonasespecialesController extends Controller
{

    var $slug     = 'zonasespeciales';
    var $idApp    = 5;
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
        $PerfilName = ZE_ZONAS_ESPECIALES::find($id);
        return trim($PerfilName->NOMBRE_ZE);
    }


    public function index(){

     if (!$this->getAccessApp() || $this->permisos[0]->aview == 0) return redirect()->route('errorAccess');
     $this->getOptionMenu();

     $empresaid = Auth::user()->empresaid;
        if ($empresaid){
            $sql  = "SELECT ZE_ZONAS_ESPECIALES.*  , ZE_EMPRESA.DESCRIPCION , users.name
                    FROM ZE_ZONAS_ESPECIALES
                    LEFT JOIN  users ON  ZE_ZONAS_ESPECIALES.USUARIO = CONVERT(varchar, users.id)
                    LEFT JOIN  ZE_EMPRESA ON    ZE_ZONAS_ESPECIALES.ID_EMP = ZE_EMPRESA.ID_EMP
                    WHERE ZE_ZONAS_ESPECIALES.ID_EMP = $empresaid ";
        }else{
            $sql  = "SELECT ZE_ZONAS_ESPECIALES.*  , ZE_EMPRESA.DESCRIPCION , users.name
                     FROM ZE_ZONAS_ESPECIALES
                     LEFT JOIN  users ON  ZE_ZONAS_ESPECIALES.USUARIO = CONVERT(varchar, users.id)
                     LEFT JOIN  ZE_EMPRESA ON    ZE_ZONAS_ESPECIALES.ID_EMP = ZE_EMPRESA.ID_EMP ";
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
                "NOMBRE_ZE"=>$request->NOMBRE_ZE,
                "ID_EMP"=>$request->ID_EMP,
                "IND_VALIDEZ_UNIV"=>$request->IND_VALIDEZ_UNIV,
                "IND_VALIDEZ_LIQ"=>$request->IND_VALIDEZ_LIQ,
                "IND_VALIDA_DBDO"=>$request->IND_VALIDA_DBDO,
                "TIP_ZE"=>$request->TIP_ZE,
                "F_VALID"=>$request->F_VALID,
            ];

             ZE_ZONAS_ESPECIALES::insert($args);
             UserController::log("Creo el registro en ZE_ZONAS_ESPECIALES - {$request->NOMBRE_ZE} para ID_EMP => {$request->ID_EMP} ",'insert');

            return redirect($this->slug.'/');
    }

    public function show(ZE_ZONAS_ESPECIALES $modules){
        //
    }

    public static function selectZe($zeID = ''){

        $empresaid = Auth::user()->empresaid;

        if (!$empresaid)
            $zes = DB::table('ZE_ZONAS_ESPECIALES')->get();
        else
            $zes = DB::table('ZE_ZONAS_ESPECIALES')->where('ID_EMP',$empresaid)->get();

        if ($zes){
            foreach($zes as $ze){
                $items[$ze->ID_ZE] = $ze->NOMBRE_ZE;
            }
        }

        return view('component.select',["items" =>$items, "value"=>$zeID, "nameField"=>'ID_ZE' ]);


    }

    public function edit($id){
        if (!$this->getAccessApp() || $this->permisos[0]->aedit == 0 ) return redirect()->route('errorAccess');
        $this->getOptionMenu();
        $datos = ZE_ZONAS_ESPECIALES::find($id);
        return view($this->slug.'.edit', ["modules"=>$datos, 'infoApp' =>  $this->infoApp[0] ] );
    }

    public function update(Request $request, $id){
        if (!$this->getAccessApp() || $this->permisos[0]->aedit == 0 ) return redirect()->route('errorAccess');
        $datos = $request->except('_token','_method');
        ZE_ZONAS_ESPECIALES::where('ID_ZE','=',$id)->update($datos);
        UserController::log("Actualizo el registro en ZE_ZONAS_ESPECIALES ".$this->getName($id)." con ID => {$id}",'update');
        return redirect($this->slug.'/');

    }


    public function destroy($id) {
        if (!$this->getAccessApp() || $this->permisos[0]->adelete == 0 ) return redirect()->route('errorAccess');
        UserController::log("Elimino el registro en ZE_ZONAS_ESPECIALES ".$this->getName($id)." con ID => {$id}",'delete');
        ZE_ZONAS_ESPECIALES::destroy($id);
        return redirect($this->slug.'/');
    }

}
