<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use DB;
use Tools;
use App\Models\modulesapp;
use App\Models\LogAction;


class logsusers extends Controller
{

    var $slug     = 'logsusers';
    var $idApp    = 3;
    var $infoApp  = '';
    var $permisos = '';


    function run(){
        $this->getOptionMenu();
        $this->getAccessApp();
    }

    function getOptionMenu(){
        $this->infoApp = modulesapp::where('id', $this->idApp)->get();
    }

    function getAccessApp($mode = 'all'){
        $user     = new LoginAdmin();
        $this->permisos = $user->accessModule($this->idApp);
        return (count($this->permisos)) ? $this->permisos : false;
    }


    function index()
    {
      $this->run();
      $datos  = LogAction::leftJoin('ac_users','ac_log_actions.userid','ac_users.id')
                ->select("ac_log_actions.*","ac_users.name","ac_users.email")
                ->orderby('id','desc')->paginate(Tools::paginacion());
      return view($this->slug.'.index', ['logact'=> $datos , 'infoApp' =>  $this->infoApp[0] , 'permisos'=> $this->permisos[0] ]  );
    }
}
