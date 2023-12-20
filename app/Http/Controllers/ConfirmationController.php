<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;

class ConfirmationController extends Controller
{
    public function confirmation()
    {
        return view('confirmation-update');
    }

    public function getdata($id)
    {
        $statusupdate = Loan::find($id);
        return view('confirmation-update', ['status_update' => $statusupdate]);
    }

    public function update(Request $request, $id)
    {
        $statusupdate = Loan::find($id);
        if ($request->has('approve')) {
            $statusupdate->status = 'APPROVED';
        } elseif ($request->has('reject')) {
            $statusupdate->status = 'REJECT';
        }
        $statusupdate->update();
        return redirect('book-si')->with('status', "Data updated Successfully");
    }
}
