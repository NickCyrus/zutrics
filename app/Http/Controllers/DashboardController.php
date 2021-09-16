<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;


class DashboardController extends Controller
{

        public function index(){

            $theme = Config::getConfig('theme');
            if (!$theme->value)
                return view('dashboard.selecttheme');
             else
                return view('dashboard');

        }

}
