<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\CaseRequest;

use App\Cases;
use App\Address;
use App\Status;

class CaseController extends Controller
{

    public function __construct() {
        return $this->middleware('admin');    
    }
    


    public function index() {
	
        $cases = Cases::all();

        return view('admin.cases.index', ['cases' => $cases]);
    }


    public function create() {
        $statuses = Status::all();
        return view('admin.cases.create',compact('statuses'));    
    }
    

    public function store(CaseRequest $request) {

        $address = Address::create([
            'state' => $request->state,
            'region' => $request->region,
            'street' => $request->street,
            'building' => $request->building,
        ]);

        Cases::create([
            'name' => $request->name,
            'description' => $request->description,
            'status_id' => $request->status_id,
            'address_id' => $address->id,
            'user_id' => auth()->id(),
        ]);

        return redirect('/admin/cases');
    }
    
	 public function edit($id)
    {
        $case = Cases::find($id);
		$statuses = Status::all();
        
		return view('admin.cases.edit', compact('case','statuses'));
    }
	
	public function update(Request $request, $id)
	{
		  $request->validate([
			'name'=>'required',
			'state'=> 'required',
			'region' => 'required',
			'street' => 'required',
			'building' => 'required',
		  ]); 

		  $case = Cases::find($id);
		  $case->name = $request->get('name');
		  $case->description = $request->get('description');
		  $case->status_id = $request->get('status_id');
		  $case->save();
		    
			DB::table('addresses')
			->updateOrInsert(
				['id' => $request->get('address_id')],
				['state' => $request->get('state') ,
				'region' =>$request->get('region'), 
				'street'=>$request->get('street'),
				'building'=>$request->get('building')]
			);

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
