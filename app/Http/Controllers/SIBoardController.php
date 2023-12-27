<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use Session;

class SIBoardController extends Controller
{
    public function historySI()
    {
        $sibooking= Loan::with('user')
        ->whereHas('user', function ($query) {
            $query->where('major', 'Sistem Informasi');
        })
        ->where('status', '!=' , 'APPROVED')
        ->orderBy('updated_at', 'asc')
        ->get();

        $siscpprove= Loan::with('user')
        ->whereHas('user', function ($query) {
            $query->where('major', 'Sistem Informasi');
        })
        ->where('status', 'APPROVED')
        ->orderBy('lab_id', 'asc')
        ->orderBy('date', 'asc')
        ->orderBy('time_rent', 'asc')
        ->get();

        return view('admin.book-si', ['si_book_history' => $sibooking], ['si_approved' => $siscpprove]);
    }

}
