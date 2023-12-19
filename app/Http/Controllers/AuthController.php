<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Session;

class AuthController extends Controller
{
    public function login()
    {
        return view ('login');
    }

    public function register()
    {
        return view ('register');
    }

    public function registration(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'nim' => 'required',
            'date_of_birth' => 'required',
            'major' => 'required',
            'password' => 'required',
        ]);

        // Membuat pengguna baru
        $user = User::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'nim' => $request->nim,
            'date_of_birth' => $request->date_of_birth,
            'major' => $request->major,
            'password' => bcrypt($request->password),
        ]);

        return redirect ('login');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::user()->role == 'mahasiswa') {
                return redirect('index');
            }

            if(Auth::user()->role == 'admin') {
                return redirect('dashboard');
            }

        }

        Session::flash('status','failed');
        Session::flash('message','Account not found');
		return redirect('/login');

        



    }
}
