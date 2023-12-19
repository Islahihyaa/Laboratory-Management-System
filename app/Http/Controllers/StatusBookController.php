<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use Illuminate\Support\Facades\Auth;

class StatusBookController extends Controller
{
    public function bookingstatus()
    {
        $userId = Auth::id();


        $bookingstatus = Loan::where('user_id', $userId)
        ->orderBy('date', 'desc')
        ->get();
        return view('status-letter', ['book_status' => $bookingstatus]);
    }
}
