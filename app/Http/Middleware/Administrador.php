<?php

namespace App\Http\Middleware;
use App\User;
use Illuminate\Support\Facades\Auth;
use Closure;

class Administrador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(empty(Auth::check()))
            return $next($request);
        
        $cargo = User::find(Auth::id())->cargo;
        if($cargo == 1)
            return redirect()->route('admin');
        return $next($request);
    }
}
