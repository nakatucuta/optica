<?php

namespace App\Http\Middleware\autorizacion;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Session;

class Admin_edit_autoMiddleware
{
    protected $auth;

public function _construct(Guard $auth) // OJO ESTE CONSTRUCTOR TAMBIEN VA
{

    $this->auth = $auth;
}

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) //Paso 2) creas el middelware de esta forma
    {
        if (Auth::User()->permissions->editar_autorizacion == '0') {
            Session::flash('privilegios',' Ingrese nuevamente al sistema');
            return back();
        } else {

           return $next($request); 
        }
        
    }
}
