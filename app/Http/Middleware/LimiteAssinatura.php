<?php

namespace App\Http\Middleware;

use Closure;
use App\Correio;
use Illuminate\Support\Facades\Auth;

class LimiteAssinatura
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
        $data = Correio::where('user_id', Auth::id())->orderBy('created_at', 'desc')->first();
        if(empty($data))
            return $next($request);
        $timedata = strtotime($data->created_at) + 2592000; 
        $actualDate = new \DateTime();
        if(strtotime($actualDate->format('y-m-d H:i:s')) >= $timedata)
            return $next($request);
        return redirect()->route('perfil');
    }
}
