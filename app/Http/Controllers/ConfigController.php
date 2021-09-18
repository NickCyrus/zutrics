<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ConfigController extends Controller
{
    static public function getConfig($key = ''){
        if (DB::connection('mysql')){
            $rs = DB::table('ac_configs')->where('keyconf', $key )->first();
            return $rs;
        }
    }

    static public function update($key = '' , $value){
        DB::table('ac_configs')->where('keyconf', $key)->update(['value'=>$value]);
    }
    

}
