<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TestController extends Controller {

    public function __construct() {
        return $this->middleware('admin');    
    }
    

    public function index() {
        $data['tasks'] = [
            [
                    'name' => 'Create Home Page',
                    'progress' => '76',
                    'color' => 'sucess'
            ],
            [
                    'name' => 'Add validations to each form',
                    'progress' => '0',
                    'color' => 'warning'
            ],
            [
                    'name' => 'Authentications with roles',
                    'progress' => '0',
                    'color' => 'info'
            ],
        ];
        return view('admin.test')->with($data);
    }

}