<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laboratory;
use Session;

class LabController extends Controller
{

    public function DataLaboratory()
    {
        $laboratory = Laboratory::all();
        return view('admin.laboratory', ['lab_detail' => $laboratory]);
    }

    public function AddConfirmation(Request $request)
    {
        $request->validate([
            'laboratory_name' => 'required',
            'laboratory_description' => 'required|min:10',
        ]);

        $laboratorysubmission = Laboratory::create([
            'laboratory_name' => $request->input('laboratory_name'),
            'laboratory_description' => $request->input('laboratory_description'),
        ]);

        return redirect('laboratory')->with('status', 'Laboratories have been added');
    }

    public function EditLaboratory($id)
    {
        $laboratory = Laboratory::find($id);
        return view('admin.laboratory-edit', ['lab_detail' => $laboratory]);
    }

    public function ConfirmEdit(Request $request, $id)
    {
        $updateLaboratory = Laboratory::find($id);
        $request->validate([
            'laboratory_name' => 'required',
            'laboratory_description' => 'required|min:10',
        ]);

        $updateLaboratory->update([
            'laboratory_name' => $request->laboratory_name,
            'laboratory_description' => $request->laboratory_description
        ]);

        return redirect('laboratory')->with('message', 'Data updated Successfully');
    }

    public function DeleteLaboratory($id)
    {
        $deletelab = Laboratory::find($id);
        $deletelab->delete();

        session()->flash('status', 'Data Deleted Succesfully');
        return redirect('laboratory');
    }
}
