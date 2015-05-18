<?php namespace App\Http\Controllers;

use App\Label;
use App\Http\Requests\CreateLabel;
use App\Http\Requests\UpdateLabel;

class BrochurelabelsController extends Controller {

	/**
	 * Display a listing of all Brands.
	 *
	 * @return View
	 */
	public function index()
	{
		$labels = Label::where('type', '=', 'Brochure')->get();
		return view('brochurelabels.index', compact('labels'));
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function create()
	{
		return view('brochurelabels.create');
	}

	/**
	 * Store a newly created Cruiseline.
	 *
	 * @param Request $request
	 * @param Cruiseline $brand
	 * @return mixed
	 */
	public function store(CreateLabel $request)
	{
		$label = Label::create($request->all());
		return redirect('brochurelabels');
	}
	
	/**
	 * Display an individual Cruiseline.
	 *
	 * @param  Cruiseline $brand
	 * @return View
	 */
	public function show($id)
	{
		return redirect('brochurelabels');	
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function edit($id)
	{
		$label = Label::find($id);
		return view('brochurelabels.edit', compact('label'));
	}

	public function update(UpdateLabel $request, $id)
	{
		$label = Label::find($id);
		$label->update($request->all());
		$label->save();		
		return redirect('brochurelabels');
	}

	public function activate($id)
	{
		$label = Label::find($id);
		$label->status = 1;
		$label->save();

		return redirect('brochurelabels');
	}

	public function deactivate($id)
   	{
   		$label = Label::find($id);
   		$label->status = 0;
		$label->save();

      	return redirect('brochurelabels');
   	}
}
