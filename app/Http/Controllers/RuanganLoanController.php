<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuanganLoanController extends Controller
{
    public function submitroom(Request $request){
        $request->validate([
            'nama_ruangan' => 'required',
            'deskripsi_ruangan' => 'required',
        ]);

        $ruanganloan = ruangan_lab::create([
            'nama_ruangan'=> $request->input('nama_ruangan'),
            'deskripsi_ruangan'=> $request->input('deskripsi_ruangan')
        ]);
    }

    public function createroom(){
        return view('admin.ruangan-loan');
    }
}
