<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;


Route::group(['prefix' => 'ajax'], function () {
    Route::post('select-icons/{element?}', function ($element='') { return json_encode(array('html'=> view('tools.showIcons')->with(['element'=>$element])->render())) ; });
    Route::get('select-icons', function () { return json_encode(array('html'=> 'ALGO')) ; });
    Route::get('users', function () { return 'users';  });
});
