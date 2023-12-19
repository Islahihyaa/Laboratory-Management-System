<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;

class DSCBoardController extends Controller
{
    public function bookDSC()
    {
        return view('book-dsc');
    }

    public function historyDSC()
    {
        $dscbooking= Loan::with('user')
        ->whereHas('user', function ($query) {
            $query->where('major', 'Digital Supply Chain');
        })
        ->orderBy('created_at', 'desc')
        ->get();
        return view('book-dsc', ['dsc_book_history' => $dscbooking]);
    }
}
