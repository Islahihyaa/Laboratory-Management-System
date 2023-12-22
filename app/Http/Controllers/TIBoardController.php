<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use Session;

class TIBoardController extends Controller
{
    public function historyTI()
    {
        $tibooking= Loan::with('user')
        ->whereHas('user', function ($query) {
            $query->where('major', 'Teknik Industri');
        })
        ->orderBy('created_at', 'desc')
        ->get();
        return view('admin.book-ti', ['ti_book_history' => $tibooking]);
    }
}
