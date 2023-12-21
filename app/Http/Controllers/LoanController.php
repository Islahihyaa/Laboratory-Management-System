<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
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
            'time_rent' => 'required',
            'time_return' => 'required',
            'lab' => 'required',
            'booking_purpose' => 'required',
        ]);

        $user_id = Auth::id();

        $loansubmission = Loan::create([
            'user_id' => $user_id,
            'lab'=> $request->input('lab'),
            'date' => $request->input('date'),
            'time_rent'=> $request->input('time_rent'),
            'time_return' => $request->input('time_return'),
            'booking_purpose' => $request->input('booking_purpose'),
        ]);

        if($loansubmission) {
            return redirect ('form-success');

        } else {
            return redirect("form-success");
        }      
    }

}
