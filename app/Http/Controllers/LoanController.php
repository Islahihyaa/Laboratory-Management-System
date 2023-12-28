<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\Laboratory;
use Illuminate\Support\Facades\Auth;
use Session;

class LoanController extends Controller
{
    public function successform()
    {
        return view ('client.form-success');
    }

    public function submitloan(Request $request)
    {       
        $request->validate([
            'full_name' => 'required',
            'nim' => 'required',
            'email' => 'required',
            'major' => 'required',
            'date' => 'required',
            'lab_id' => 'required',
            'time_rent' => 'required',
            'time_return' => 'required',
            'booking_purpose' => 'required',
        ]);

        $user_id = Auth::id();

        $loansubmission = Loan::create([
            'user_id' => $user_id,
            'lab_id'=> $request->input('lab_id'),
            'date' => $request->input('date'),
            'time_rent'=> $request->input('time_rent'),
            'time_return' => $request->input('time_return'),
            'booking_purpose' => $request->input('booking_purpose'),
        ]);

        if($loansubmission) {
            return redirect ('form-success');

        } else {
            dd('eror');
        }
    }

    public function bookingnow()
    {
        $laboratory= Laboratory::all();
        return view ('client.lab-loan-letter', ['lab_name'=> $laboratory]);
    }

    public function bookingstatus()
    {
        $userId = Auth::id();
        $bookingstatus = Loan::with('laboratory')
        ->where('user_id', $userId)
        ->orderBy('updated_at', 'desc')
        ->get();
        return view('client.status-letter', ['book_status' => $bookingstatus]);
    }

}
