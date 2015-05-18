<?php namespace App\Http\Controllers;

use App\Colour;
use App\Http\Requests\CreateColour;
use App\Http\Requests\UpdateColour;

class ColoursController extends Controller {

	/**
	 * Display a listing of all Brands.
	 *
	 * @return View
	 */
	public function index()
	{
		$colours = Colour::all();
		return view('colours.index', compact('colours'));
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function create()
	{
		return view('colours.create');
	}

	/**
	 * Store a newly created Cruiseline.
	 *
	 * @param Request $request
	 * @param Cruiseline $brand
	 * @return mixed
	 */
	public function store(CreateColour $request)
	{
		$colour = Colour::create($request->all());
		return redirect('colours');
	}

	/**
	 * Display an individual Cruiseline.
	 *
	 * @param  Cruiseline $brand
	 * @return View
	 */
	public function show($id)
	{
		return redirect('colours');	
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function edit($id)
	{
		$colour = Colour::find($id);
		return view('colours.edit', compact('colour'));
	}

	public function update(UpdateColour $request, $id)
	{
		$colour = Colour::find($id);
		$colour->update($request->all());
		$colour->save();		
		return redirect('colours');
	}

	public function activate($id)
	{
		$colour = Colour::find($id);
		$colour->status = 1;
		$colour->save();

		return redirect('colours');
	}

	public function deactivate($id)
   	{
   		$colour = Colour::find($id);
   		$colour->status = 0;
		$colour->save();

      	return redirect('colours');
   	}

}
