<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Loan;
use Illuminate\Support\Facades\Session;

class ManageUserController extends Controller
{
    public function showuser()
    {  
        $showuser = User::all()
        ->where('role', "!=" , 'admin');
        return view('admin.user-management', ['show_user' => $showuser]);
    }

    public function edituser($id)
    {  
        $showuser = User::find($id);
        return view('admin.edit-user', ['user_to_edit' => $showuser]);
    }

    public function confirmedit(Request $request, $id)
    {  
        $edituser = User::find($id);
        $request->validate([
            'full_name',
            'email' => 'email|unique:users',
            'date_of_birth' => 'date',
            'password' => 'required_with:password_confirmation|same:password_confirmation|min:3',
            'password_confirmation' => 'required|min:3'
        ]);

        $edituser->update([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'password' => bcrypt($request->password),
        ]);

        Session::flash('dataupdate','Data Updated Succesfully');
        return redirect('user-manage');
    }

    public function deletuser($id)
    {  
        $showuser = User::find($id);
        $deletelab = Loan::where('user_id', $showuser->id)->first();
 
        if($deletelab){
            if( $showuser->id == $deletelab->user_id) {
                Session::flash('activeuser','The user is now active');
                return redirect('user-manage');
            } 
        }
        $showuser->delete();
        Session::flash('status','Data Deleted Succesfully');
        return redirect('user-manage');
    }
}
