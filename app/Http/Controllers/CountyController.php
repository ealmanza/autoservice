<?php namespace Autoservice\Http\Controllers;

use Autoservice\Http\Controllers\Controller;
use Autoservice\Http\Entities\County;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class CountyController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $departamentos = County::paginate(10);
        $departamentos->setPath('counties');
        return view('configuration.county.index')->with('departamentos', $departamentos);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        return view('configuration.county.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
        $messages = [
            'required' => 'El Campo :attribute Es Requerido.',
        ];

        $data = Request::all();

        $v = Validator::make($data,['name'=>'required'], $messages);

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }
        else
        {
            $county = new County();
            $county->name = $data['name'];
            $county->save();
        }
        return redirect()->route("counties.create");
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
        $county = County::findOrFail($id);
        return view('configuration.county.update', compact('county'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
        $data = Request::all();
        $county = County::findOrFail($id);
        $county->name = $data['name'];
        $county->save();
        return redirect()->route("county");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
