<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\OrganizationRequest;
use Illuminate\Http\Request;
use App\Organization;
use App\Address; 
use Illuminate\Support\Facades\DB;

class OrganizationController extends Controller
{

	public function index() {
	
        $org = Organization::all();

        return view('admin.organization.index', ['org' => $org]);
    }
	
    public function create()
	{
	   return view('admin.organization.create');
	}
	
	 public function store(OrganizationRequest $request)
    {

	  
	  $address = Address::create([
            'state' => $request->state,
            'region' => $request->region,
            'street' => $request->street,
            'building' => $request->building,
        ]);
	  
	  Organization::create([
            'name' => $request->name,
            'address_id' => $address->id,
            'owner_id' => auth()->id()
      ]);
		
		
		
      return redirect('/admin/org');
    }
	
	
	 public function edit($id)
    {
        $org = Organization::find($id);

        return view('admin.organization.edit', compact('org'));
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

		  $org = Organization::find($id);
		  $org->name = $request->get('name');
		  $org->save();
		   
		DB::table('addresses')
		->updateOrInsert(
			['id' => $request->get('address_id')],
			['state' => $request->get('state') ,
			'region' =>$request->get('region'), 
			'street'=>$request->get('street'),
			'building'=>$request->get('building')]
		);

		return redirect('/admin/org');
	}


	public function destroy($id)
	{
		 $org = Organization::find($id);
		 $org->delete();

		return redirect('/admin/org');	}
	}
