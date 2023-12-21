<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use Illuminate\Support\Facades\Auth;

class StatusBookController extends Controller
{
    public function bookingnow()
    {
        return view ('client.lab-loan-letter');
    }

    public function bookingstatus()
    {
        $userId = Auth::id();


        $bookingstatus = Loan::where('user_id', $userId)
        ->orderBy('updated_at', 'desc')
        ->get();
        return view('client.status-letter', ['book_status' => $bookingstatus]);
    }
}
