<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function ruangan(){
        return view('admin.ruangan');
    }
}
