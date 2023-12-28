<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;
use App\Models\Laboratory;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{

    public function index(Request $req)
    {
        $inventory = Inventory::with('laboratory')->where('labolatoryId', $req->labolatoryId)->first();

        if ($inventory) {
            return view('admin.detail-room', compact('inventory'));
        } else {
            session()->flash('notSetDataMessage', 'Sorry, Inventory Data Not Avaiable Right Now');
            return redirect('laboratory');
        }
    }

    public function createInventoryForm()
    {
        $laboratoriums = Laboratory::all();
        return view('admin.create-inventory-form', compact('laboratoriums'));
    }

    public function store(Request $req)
    {
        $inventory = new Inventory;
        $inventory->roomCapacity = $req->roomCapacity;
        $inventory->computerAvaiable = $req->computerAvaiable;
        $inventory->screenProjector = $req->screenProjector;
        $inventory->projector = $req->projector;
        $inventory->labolatoryId  = $req->labolatoryId;
        $inventory->save();

        session()->flash('storeDataSuccessMessage', 'Inventory data is created');
        return redirect('laboratory');
    }

    public function updateInventoryForm(Request $req)
    {
        $laboratoriums = $laboratoriums = Laboratory::all();
        $inventory = DB::table('inventories')->where('id', $req->id)->first();
        return view('admin.update-inventory-form', compact('inventory', 'laboratoriums'));
    }

    public function update(Request $req)
    {
        $inventory = Inventory::find($req->id);
        $inventory->roomCapacity = $req->roomCapacity;
        $inventory->computerAvaiable = $req->computerAvaiable;
        $inventory->screenProjector = $req->screenProjector;
        $inventory->projector = $req->projector;
        $inventory->save();

        session()->flash('updateInventoryMessage', 'Inventory Data successfuly updated');
        return redirect('/laboratory');
    }

    public function destroy(Request $req)
    {
        DB::table('inventories')->where('id', $req->id)->delete();
        session()->flash('deletedDataMessage', 'Inventory Data successfully deleted');
        return redirect('laboratory');
    }
}
