<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Datatables;
use Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Wilayah;

class MasterController extends Controller
{
    public function getIndex()
	{
		$data['page_title'] = "Master Data";
		$data['head_title'] = "Data Wilayah";
	    return view('wilayah', $data);
	}

	public function anyData()
    {
    	$data = Wilayah::select('regions_id', 'regions_name', 'image')->get();
	    return Datatables::of($data)
	    	->addColumn('action', function ($wilayah) {
                return '<a href="/master/wilayah/edit/'.$wilayah->regions_id.'" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-edit"></i> Edit</a>&nbsp;<a href="/master/wilayah/delete/'.$wilayah->regions_id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
            })
	    	->make(true);
    }

    public function getForm()
    {
    	$data['page_title'] = "Master Data";
    	$data['head_title'] = "Form Wilayah";
    	$data['url'] = '/master/wilayah/save';
		return view('wilayahForm', $data);
    }

    public function store(Request $request)
	{
		$regions_name = $request->input('regions_name');
		$image = $request->file('image');
		$validator = Validator::make(
            array(
                'regions_name' => $regions_name,
                'image' => $image
            ),
            array(
                'regions_name' => 'required',
                'image' => 'required'
            )
        );
        if ($validator->fails()) {
        	$params = array('message' => $validator->messages()->first());
        	return redirect()->back()->with($params);
        }
        $validate = Wilayah::where('regions_name', $regions_name)->first();
        if (is_object($validate)) {
        	$params = array('message' => 'Duplicate data.');
        	return redirect()->back()->with($params);
        }
        
        #upload file
        $fileName = $request->file('image')->getClientOriginalName();
        $path = base_path() . '/public/uploads/images/regions/';
        $request->file('image')->move($path , $fileName);
        
		$wilayah = new Wilayah;
        $wilayah->regions_name = $regions_name;
        $wilayah->image = $fileName;
        $wilayah->save();

        return redirect('master/wilayah');
	}

	public function edit($id)
	{
		$validator = Validator::make(
            array(
                'regions_id' => $id
            ),
            array(
                'regions_id' => 'required'
            )
        );
        if ($validator->fails()) {
        	$params = array('message' => $validator->messages()->first());
        	return redirect()->back()->with($params);
        }
        $wilayah = Wilayah::select('regions_id', 'regions_name', 'image')
        			->where('regions_id', $id)->first();
        if (! is_object($wilayah)) {
            $params = array('message' => 'Data Not Found');
        	return redirect()->back()->with($params);
        }

       	$data['page_title'] = "Master Data";
    	$data['head_title'] = "Form Wilayah";
    	$data['url'] = '/master/wilayah/update/' . $wilayah->regions_id;
    	$data['regions_id'] = $wilayah->regions_id;
    	$data['regions_name'] = $wilayah->regions_name;
    	$data['image'] = $wilayah->image;

		return view('wilayahForm', $data);
	}

	public function update($id, Request $request)
	{
		$regions_name = $request->input('regions_name');
		$image = $request->file('image');
		$validator = Validator::make(
            array(
                'regions_name' => $regions_name,
                'image' => $image
            ),
            array(
                'regions_name' => 'required'
            )
        );
        if ($validator->fails()) {
        	$params = array('message' => $validator->messages()->first());
        	return redirect()->back()->with($params);
        }

        $wilayah = Wilayah::where('regions_id', $id)->first();
        if (! is_object($wilayah)) {
            $params = array('message' => $validator->messages()->first());
        	return redirect()->back()->with($params);
        }
        $validate = Wilayah::where('regions_id', '<>', $id)->where('regions_name', $regions_name)->first();
        if (is_object($validate)) {
        	$params = array('message' => 'Duplicate data');
        	return redirect()->back()->with($params);
        }
		
		if ($image) {
			#delete curent file
			unlink(base_path() . '/public/uploads/images/regions/' . $wilayah->image);
			#upload file
	        $fileName = $request->file('image')->getClientOriginalName();
	        $path = base_path() . '/public/uploads/images/regions/';
	        $request->file('image')->move($path , $fileName);
	        $wilayah->image = $fileName;
		}

        $wilayah->regions_name = $regions_name;
        $wilayah->save();

        return redirect('master/wilayah');
	}

	public function destroy($id, Request $request)
	{
		$validator = Validator::make(
            array(
                'regions_id' => $id
            ),
            array(
                'regions_id' => 'required'
            )
        );
        if ($validator->fails()) {
            $params = array('message' => $validator->messages()->first());
        	return redirect()->back()->with($params);
        }

        $wilayah = Wilayah::where('regions_id', $id)->first();
        if (! is_object($wilayah)) {
            $params = array('message' => 'Data not found.');
        	return redirect()->back()->with($params);
        }

        #delete file
		unlink(base_path() . '/public/uploads/images/regions/' . $wilayah->image);

        $wilayah->delete();
        return redirect('master/wilayah');
	}
}
