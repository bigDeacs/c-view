<?php namespace App\Http\Controllers;

use App\Type;
use App\Http\Requests\CreateType;
use App\Http\Requests\UpdateType;

class TypesController extends Controller {

	/**
	 * Display a listing of all Brands.
	 *
	 * @return View
	 */
	public function index()
	{
		$types = Type::all();
		return view('types.index', compact('types'));
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function create()
	{
		return view('types.create');
	}

	/**
	 * Store a newly created Cruiseline.
	 *
	 * @param Request $request
	 * @param Cruiseline $brand
	 * @return mixed
	 */
	public function store(CreateType $request)
	{
		$type = Type::create($request->all());
		return redirect('home/types');
	}

	/**
	 * Display an individual Cruiseline.
	 *
	 * @param  Cruiseline $brand
	 * @return View
	 */
	public function show($id)
	{
		return redirect('home/types');	
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function edit($id)
	{
		$type = Type::find($id);
		return view('types.edit', compact('type'));
	}

	public function update(UpdateType $request, $id)
	{
		$type = Type::find($id);
		$type->update($request->all());
		$type->save();		
		return redirect('home/types');
	}

	public function activate($id)
	{
		$type = Type::find($id);
		$type->status = 1;
		$type->save();

		return redirect('home/types');
	}

	public function deactivate($id)
   	{
   		$type = Type::find($id);
   		$type->status = 0;
		$type->save();

      	return redirect('home/types');
   	}

}
