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
<<<<<<< HEAD
            'email' => 'required|unique:users',
            'nim' => 'required|min:5|unique:users',
=======
<<<<<<< HEAD
            'email' => 'required|unique:users',
            'nim' => 'required|min:5|unique:users',
=======
            'email' => 'required',
            'nim' => 'required|min:5',
>>>>>>> 2d8b518d (penambahan fitur user management)
>>>>>>> 2a55bafa (penambahan fitur usermanagement)
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
            elseif((Auth::user()->role == 'superadmin')) {
                return redirect('superAdmin.index');
            }
>>>>>>> 2d8b518d (penambahan fitur user management)
>>>>>>> 2a55bafa (penambahan fitur usermanagement)

        } else {
            Session::flash('message','Account not found');
            return redirect('/');
        }




    }
}
