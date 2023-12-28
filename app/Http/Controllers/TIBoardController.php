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
        ->where('status', '!=' , 'APPROVED')
        ->orderBy('updated_at', 'asc')
        ->get();

        $tiscpprove= Loan::with('user')
        ->whereHas('user', function ($query) {
            $query->where('major', 'Teknik Industri');
        })
        ->where('status', 'APPROVED')
        ->orderBy('lab_id', 'asc')
        ->orderBy('date', 'asc')
        ->orderBy('time_rent', 'asc')
        ->get();

        return view('admin.book-ti', ['ti_book_history' => $tibooking], ['ti_approved' => $tiscpprove]);
    }
}
