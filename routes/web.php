<?php

use App\Http\Controllers\EmpresasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginAdmin;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModulesController;
use App\Http\Controllers\PerfilesController;
use App\Http\Controllers\zonasespecialesController;
use App\Http\Controllers\TrafosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\logsusers;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ThemeController;

Route::get('/login', function () {  return view('login'); });

Route::get('logout', [LoginAdmin::class,'logout']);

Route::post('/login', [LoginAdmin::class,'login']);

Route::get('/login', function () { return view('pages.authentication.login'); })->name('login');

Route::get('/errorAccess',function(){ return view('accesoinvalido'); })->name('errorAccess');

Route::group(['middleware' => ['auth', 'ControlUser'] ], function () {

    Route::get('/', [DashboardController::class, 'index']);



    Route::get('dashboard/reloadEnterPrice/{id}', [DashboardController::class,'reloadEnterPrice']);
    Route::get('dashboard/{id}/enterprice', [DashboardController::class,'selectenterprice']);

    Route::resource('dashboard', DashboardController::class);

    Route::post('profile', [UserController::class,'updatepass']);
    Route::get('profile', [UserController::class,'view_profile']);

    Route::resource('perfiles', PerfilesController::class);

    Route::get('usuarios/{id}/logs', [UsuariosController::class,'logs']);
    Route::resource('usuarios', UsuariosController::class);


    Route::resource('modules', ModulesController::class);
    Route::get('tools/showicons', function () { return view('tools.showIcons'); });
    Route::get('logsusers/reloadLogsUser/{id}', [logsusers::class,'reloadLogsUser']);
    Route::resource('logsusers', logsusers::class);

    Route::post('savetheme', [ThemeController::class, 'save']);

    /*Ajax*/

    Route::get('perfiles/exist/{name}/{id?}', [PerfilesController::class,'exist'] );
    Route::get('usuarios/exist/{name}/{id?}', [UsuariosController::class,'exist'] );

});



