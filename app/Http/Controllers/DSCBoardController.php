<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use Session;

class DSCBoardController extends Controller
{
    public function historyDSC()
    {
        $dscbooking= Loan::with('user')
        ->whereHas('user', function ($query) {
            $query->where('major', 'Digital Supply Chain');
        })
        ->orderBy('updated_at', 'asc')
        ->get();
        return view('admin.book-dsc', ['dsc_book_history' => $dscbooking]);
    }
}
