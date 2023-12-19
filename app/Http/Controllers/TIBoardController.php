<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;

class TIBoardController extends Controller
{
    public function bookTI()
    {
        return view('book-ti');
    }

    public function historyTI()
    {
        $tibooking= Loan::with('user')
        ->whereHas('user', function ($query) {
            $query->where('major', 'Teknik Industri');
        })
        ->orderBy('created_at', 'desc')
        ->get();
        return view('book-ti', ['ti_book_history' => $tibooking]);
    }
}
