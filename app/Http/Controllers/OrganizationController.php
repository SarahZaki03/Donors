<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organization;

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
	
	 public function store(Request $request)
    {
      /*$request->validate([
        'name'=>'required',
        'state'=> 'required',
        'region' => 'required',
		'street' => 'required',
		'building' => 'required',
      ]);*/
	  
	  Organization::create([
            'name' => $request->name,
            'address_id' => 3,
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
			'name'=>'required'
		  ]);

		  $org = Organization::find($id);
		  $org->name = $request->get('name');
		  $org->save();

		return redirect('/admin/org');
	}


	public function destroy($id)
	{
		 $org = Organization::find($id);
		 $org->delete();

		return redirect('/admin/org');	}
	}
