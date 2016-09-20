<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Datatables;
use App\Test;

class DatatablesController extends Controller
{

    public function getIndex()
	{
	    return view('example');
	}

	public function anyData()
    {
    	$test = Test::get();
        // return Datatables::of($test)->make(true);
        // $data = User::select('user_id', 'role_id', 'username', 'email', 'kode', 'name', 'phone', 'address')
					// ->where('role_id', 2)->get();
	    return Datatables::of($test)
	    	->addColumn('action', function ($data) {
                return '<a href="/datatables/edit/'.$data->id.'" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit"></i> Edit</a>&nbsp;<a href="/datatables/delete/'.$data->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })
	    	->make(true);
    }

    public function getForm()
	{
		$data = array('url' => '/datatables/save');
		return view('datatablesForm', $data);
	}

}
