<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;


class DashboardController extends Controller
{

        public function index(){

            return view('dashboard');

        }

}
