<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\modulesapp;
use App\Http\Controllers\LoginAdmin;


class ControlUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        // \Request::route()->getName()                 => modules.create
        // Route::getFacadeRoot()->current()->uri()     => modules/create
        // Route::currentRouteName()                    => modules.create
        // Route::getCurrentRoute()->getActionName()    => App\Http\Controllers\ModulesController@create
        // Route::currentRouteAction()                  => App\Http\Controllers\ModulesController@create
        // Route::currentRouteAction()                  => App\Http\Controllers\ModulesController@create

        // Si está autenticado se verifica
        if (auth()->check()){
            $modAccess    = LoginAdmin::getModulesAccess();
            $ModAct       = explode('.',Route::currentRouteName());
            $checkAction  = array('aview'=>'index','aedit'=>'edit','anew'=>'create');
            $moduleSelect = $this->getModule($modAccess , $ModAct[0]);

            // Si el modulo existe
            $autorizado  = true;

            if ($moduleSelect){


                switch($ModAct[1]){
                    case 'index':
                        if ($moduleSelect->aview != 1) $autorizado  = false;
                    break;
                    case 'create':
                    case 'store':
                        if ($moduleSelect->anew != 1) $autorizado  = false;
                    break;
                    case 'update':
                    case 'edit':
                        if ($moduleSelect->aedit != 1) $autorizado  = false;
                    break;
                    case 'destroy':
                        if ($moduleSelect->adelete != 1) $autorizado  = false;
                    break;

                }

                if (!$autorizado) return redirect('/errorAccess');
            }

        }

        return $next($request);
    }

    function getModule($modules , $comparation){
              $i = 0;
            foreach( $modules as $module){
                if ($module->urlapp === $comparation){
                        return $modules[$i];
                }
                $i++;
            }
    }

}
