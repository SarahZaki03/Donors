<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Cases extends Controller
{
    public function index() {
	 
		// $cases = DB::table('cases')->get();
        $cases = DB::table('cases')
            ->join('statuses', 'cases.status_id', '=', 'statuses.id')
            ->join('addresses', 'cases.address_id', '=', 'addresses.id')
            ->select('cases.*', 'statuses.name as sName', 'addresses.*')
            ->get();
			
        return view('cases', ['cases' => $cases]);
    }
	
	
	// This function to delete case
	public function deleteCase($id) {
	 
		DB::table('cases')->where('id', $id)->delete();
		return $this->index();
    }
}
