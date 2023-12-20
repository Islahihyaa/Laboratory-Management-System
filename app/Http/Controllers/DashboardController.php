<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use Session;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function bookhistory()
    {
        $bookinghistory = Loan::with('user')
        ->orderBy('created_at', 'desc')
        ->where('status', '!=', 'PENDING')
        ->get();
        return view('dashboard', ['book_history' => $bookinghistory]);
    }

    public function delete($id)
    {
        $deletehistory = Loan::find($id);
        $deletehistory->delete();

        Session::flash('status','Data Deleted Succesfully');
        // Session::flash('message','Account not found');
        return redirect('dashboard');
    }

}
