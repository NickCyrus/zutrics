<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ConfigController;

class ThemeController extends Controller
{
   //

   public function save(Request $req ){

      $datos = $req->except('_token');

      ConfigController::update('theme',json_encode($datos));

      return redirect('dashboard')->with(['alert' => 'Tema aplicado']);

   }

   static public function getThemeOption(){
      
      $theme = ConfigController::getConfig('theme');
      $theme = json_decode($theme->value,true);
      return $theme;
   }

}
