<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ValidateUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if(Auth::user()->role == 'mahasiswa') {
                return redirect('index');
            }
            if(Auth::user()->role == 'admin') {
                return redirect('dashboard');
            }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            if(Auth::user()->role == 'superadmin') {
                return redirect('home');
            }
>>>>>>> 2d8b518d (penambahan fitur user management)
>>>>>>> 2a55bafa (penambahan fitur usermanagement)
        }else{
            return $next($request);
        }

        
    }
}
