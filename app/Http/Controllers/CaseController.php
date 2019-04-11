<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Cases;
use App\Status;

class CaseController extends Controller
{
    public function index() {
	
        $cases = Cases::all();

        return view('admin.cases.index', ['cases' => $cases]);
    }


    public function create() {
        $statuses = Status::all();
        return view('admin.cases.create',compact('statuses'));    
    }
    

    public function store(Request $request) {

        // should solve address storing problem 
        Cases::create([
            'name' => $request->name,
            'description' => $request->description,
            'status_id' => $request->status_id,
            'address_id' => 3,
            'user_id' => auth()->id(),
        ]);

        return redirect('/admin/cases');
    }
    

	public function destroy(Cases $case) {
	   
        // first delete the address
        // Remember to do this on the database level 
        $case->address->delete();

        // then delete the case 
        $case->delete();

    	return back();
    }
}
