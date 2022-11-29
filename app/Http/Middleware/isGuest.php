<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isGuest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()) {
            //cek kalau di autnya uda ada historu login, dia gabola masuk ke login lagi bakal di redirect ke
            return redirect()->route('todo')->with('notAllowed', 'Anda sudah login!');          
        }
       //kalau gaada history login, baru boleh next ke login
        return $next($request);
    }
}
