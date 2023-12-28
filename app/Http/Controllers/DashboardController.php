<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use Session;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function bookSI()
    {
        return view('admin.book-si');
    }

    public function bookDSC()
    {
        return view('admin.book-dsc');
    }

    public function bookTI()
    {
        return view('admin.book-ti');
    }

    public function laboratory()
    {
        return view('admin.laboratory');
    }

    public function addlaboratory()
    {
        return view('admin.laboratory-add');
    }

    public function bookhistory()
    {
        $bookinghistory = Loan::with('user')
        ->orderBy('updated_at', 'desc')
        ->where('status', '!=', 'PENDING')
        ->get();
        $bookingcount = Loan::with('user')
        ->where('status', 'PENDING')
        ->count();
        // $bookingcount = $bookinghistory->count();
        return view('admin.dashboard', ['book_history' => $bookinghistory], ['book_count' => $bookingcount]);
    }

    public function delete($id)
    {
        $deletehistory = Loan::find($id);
        $deletehistory->delete();

        session()->flash('status', 'Data Deleted Succesfully');
        return redirect('dashboard');
    }
}
