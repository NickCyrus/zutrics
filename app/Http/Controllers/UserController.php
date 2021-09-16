<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Auth;
use Carbon\Carbon;
use DB;
use App\Http\Controllers\LoginAdmin;
use App\Models\LogLogin;
use App\Models\LogAction;

class UserController extends Controller
{
    static function infoUser( $field = '*'){
            $user = Auth::user();
            return ($field == '*') ? $user : $user->$field;
    }

    static function getinfoUser(){
        return Auth::user();
    }


    static function log($msg = '' , $action='' ){
        $user  = Auth::user();
        $agent = new Agent();
        $msg   = str_replace('[nameuser]',$user->name, $msg );
        LogAction::insert( ['created_at'=>Carbon::now(), 'userid'=>$user->id , 'ipaccess'=>\request()->ip() , 'comment'=>$msg , 'action'=>$action ]);
    }

    function view_profile(){
            $user    = Auth::user();
            $records = LogLogin::where('userid', $user->id)->limit(30)->get();
            $logact  = LogAction::where('userid', $user->id)->orderby('id','desc')->limit(30)->get();
            return view('profile',["User" =>$user, "records"=>$records , "logact"=>$logact]);
    }

    function updatepass(Request $request){

        $datos = $request->all();
        $user = Auth::user(); // Obtenga la instancia del usuario en sesión
        $password = bcrypt($request->pass1); // Encripte el password
        $user->password = $password; // Rellene el usuario con el nuevo password ya encriptado
        $user->save(); // Guarde el usuario
        $this->log('Actualizo al contraseña de su cuenta','update');
        $records = LogLogin::where('userid', $user->id)->limit(30)->get();
        $logact  = LogAction::where('userid', $user->id)->orderby('id','desc')->limit(30)->get();
        return view('profile',["User" =>$user, "Response"=>'success', "records"=>$records , "logact"=>$logact]);
   }

    function logAccess( $req ){

        $user = Auth::user();

        $agent = new Agent();

        if ( $agent->isDesktop() ) $device = 'PC';
        if ( $agent->isMobile() ) $device = 'MOBIL';

        LogLogin::insert([
            ["userid" =>$user->id,
             "ipaccess" => $req->ip() ,
             "agent"=> $this->userAgent(),
             "created_at"=> Carbon::now(),
             "device"=> $device,
             "event"=>'Login',
             "info" => ""]
        ],true);

    }

    function logAccessOut( $req ){

        $user = Auth::user();

        $agent = new Agent();

        if ( $agent->isDesktop() ) $device = 'PC';
        if ( $agent->isMobile() ) $device = 'MOBIL';

        LogLogin::insert([
            ["userid" =>$user->id,
             "ipaccess" => $req->ip() ,
             "agent"=> $this->userAgent(),
             "created_at"=> Carbon::now(),
             "device"=> $device,
             "event"=>'Logout',
             "info" => ""]
        ],true);

    }

    function userAgent(){

        $agent = new Agent();

        $device    = $agent->device();
        $platform  = $agent->platform();
        $vplatform = $agent->version($platform);
        $browser   = $agent->browser();
        $vbrowser  = $agent->version($browser);

        if ($agent->isDesktop()){
            return "{$platform} {$vplatform}, {$browser}/{$vbrowser}";
        }else if ($agent->isMobile()){
            return "$device , {$platform}, {$browser}/{$vbrowser}";
        }

    }

}
