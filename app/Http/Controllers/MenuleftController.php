<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use Auth;
use DB;

class MenuleftController extends Controller
{
    //


    public static function buildMenuLeft(  ){
        $user  = new LoginAdmin();
        $items = $user->getModulesAccessMenu();
        return view('menuleftitem',["items"=>$items]);
    }



}
