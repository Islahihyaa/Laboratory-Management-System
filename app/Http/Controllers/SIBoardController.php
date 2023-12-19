<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;

class SIBoardController extends Controller
{
    public function bookSI()
    {
        return view('book-si');
    }

    public function historySI()
    {
        $sibooking= Loan::with('user')
        ->whereHas('user', function ($query) {
            $query->where('major', 'Sistem Informasi');
        })
        ->orderBy('created_at', 'desc')
        ->get();
        return view('book-si', ['si_book_history' => $sibooking]);
    }

}
