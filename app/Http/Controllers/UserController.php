<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;

class UserController extends Controller
{
    public function index()
    {
        return view ('index');
    }

    public function loan()
    {
        return view ('lab-loan-letter');
    }

    public function status()
    {
        return view ('status-letter');
    }


}
