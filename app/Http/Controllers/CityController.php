<?php namespace Autoservice\Http\Controllers;

use Autoservice\Http\Controllers\Controller;
use Autoservice\Http\Entities\City;
use Autoservice\Http\Entities\County;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $ciudades = City::paginate(10);
        $ciudades->setPath('cities');
        return view('configuration.city.index')->with('ciudades', $ciudades);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        $county = County::lists('name', 'id');
        return view('configuration.city.create')->with('county', $county);
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

        $v = Validator::make($data,[
            'county_id'=>'required',
            'name'=>'required'
        ], $messages);

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }
        else
        {
            $city = new County();
            $city->name = $data['name'];
            $city->county_id = $data['county_id'];
            $city->save();
        }
        return redirect()->route("cities.create");
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
        $city = City::findOrFail($id);
        $county = County::lists('name', 'id');
        return view('configuration.city.update', compact('city','county'));
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
