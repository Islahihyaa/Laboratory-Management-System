<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function bookhistory()
    {
        $bookinghistory = Loan::with('user')
        ->orderBy('created_at', 'desc')
        ->get();
        return view('dashboard', ['book_history' => $bookinghistory]);
    }


}
