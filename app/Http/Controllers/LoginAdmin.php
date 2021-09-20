<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Auth;
use DB;
use App\Models\User;
use App\Models\permission;

class LoginAdmin extends Controller
{
        public function login(Request $req , UserController $user){

            $datos =  (object)$req->input();

            if ( Auth::attempt(['email' => $datos->userName, 'password' => $datos->passName ])){
                    $req->session()->regenerate();
                    $this->updateLastLoginDate();
                    $user->logAccess($req);
                    return redirect('dashboard');

            }
            return redirect()->route('login')->with(['errorLogin' => 'Error por favor verifique los datos.']);

        }

        public function accessModule($idApp ){
            $idUser  =  Auth::User()->id;
            $permisos = permission::join('ac_profiles','ac_permissions.profid','ac_profiles.id')
                            ->join('ac_profpermissions','ac_profiles.id','ac_profpermissions.profid')
                            ->join('ac_modulesapps','ac_profpermissions.modappid','ac_modulesapps.id')
                            ->where('userid', $idUser )
                            ->where('ac_modulesapps.id', $idApp )
                            ->get();

            return $permisos;
        }

        static function getModulesAccess(){
               $idUser = Auth::User()->id;
               $modulos = permission::join('ac_profiles','ac_permissions.profid','ac_profiles.id')
                            ->join('ac_profpermissions','ac_profiles.id','ac_profpermissions.profid')
                            ->join('ac_modulesapps','ac_profpermissions.modappid','ac_modulesapps.id')
                            ->where('userid', $idUser )
                            ->get();
              return $modulos;

        }

        static function getModulesAccessMenu(){
            $idUser = Auth::User()->id;
            $modulos = permission::join('ac_profiles','ac_permissions.profid','ac_profiles.id')
                         ->join('ac_profpermissions','ac_profiles.id','ac_profpermissions.profid')
                         ->join('ac_modulesapps','ac_profpermissions.modappid','ac_modulesapps.id')
                         ->where('userid', $idUser )
                         ->where('aview', 1 )
                         ->orderBy('orderapp')
                         ->get();
           return $modulos;

     }

        public function logout(Request $req , UserController $user) {
            $user->logAccessOut($req);
            Auth::logout();
            return redirect('/login');
        }

        public static function updateLastLoginDate(){
            if (Auth::check()){
                    User::where('id', Auth::User()->id)->update(['updated_at' =>now()]);
             }
        }

        static function getInfoLogin(){
            
            return User::where('id', Auth::User()->id)->first();
        }


}
