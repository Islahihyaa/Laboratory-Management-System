<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view ('auth.register');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function registration(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => 'required|unique:users',
            'nim' => 'required|min:5|unique:users',
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

        Session::flash('status','Register Success');
        return redirect ('/');
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
            } elseif((Auth::user()->role == 'admin')) {
                return redirect('dashboard');
            }

        } else {
            Session::flash('message','Account not found');
            return redirect('/');
        }




    }
}
