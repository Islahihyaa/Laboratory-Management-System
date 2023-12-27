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
        ->where('status', '!=' , 'APPROVED')
        ->orderBy('updated_at', 'asc')
        ->get();

        $dscscpprove= Loan::with('user')
        ->whereHas('user', function ($query) {
            $query->where('major', 'Digital Supply Chain');
        })
        ->where('status', 'APPROVED')
        ->orderBy('lab_id', 'asc')
        ->orderBy('date', 'asc')
        ->orderBy('time_rent', 'asc')
        ->get();

        return view('admin.book-dsc', ['dsc_book_history' => $dscbooking], ['dsc_approved' => $dscscpprove]);
    }
}
