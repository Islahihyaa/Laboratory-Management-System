<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;

class UserController extends Controller
{
    public function index()
    {
        return view ('client.index');
    }

    public function status()
    {
        return view ('client.status-letter');
    }


}
