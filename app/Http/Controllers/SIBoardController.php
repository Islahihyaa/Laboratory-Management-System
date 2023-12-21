<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\User;
use Session;

class SIBoardController extends Controller
{
    public function historySI()
    {
        $sibooking= Loan::with('user')
        ->whereHas('user', function ($query) {
            $query->where('major', 'Sistem Informasi');
        })
        ->orderBy('updated_at', 'asc')
        ->get();
        return view('admin.book-si', ['si_book_history' => $sibooking]);
    }

}
