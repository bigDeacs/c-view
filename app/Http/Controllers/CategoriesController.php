<?php namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateCategory;
use App\Http\Requests\UpdateCategory;

class CategoriesController extends Controller {

	/**
	 * Display a listing of all Brands.
	 *
	 * @return View
	 */
	public function index()
	{
		$categories = Category::all();
		return view('categories.index', compact('categories'));
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function create()
	{
		return view('categories.create');
	}

	/**
	 * Store a newly created Cruiseline.
	 *
	 * @param Request $request
	 * @param Cruiseline $brand
	 * @return mixed
	 */
	public function store(CreateCategory $request)
	{
		$category = Category::create($request->all());
		return redirect('home/categories');
	}
	
	/**
	 * Display an individual Cruiseline.
	 *
	 * @param  Cruiseline $brand
	 * @return View
	 */
	public function show($id)
	{
		return redirect('home/categories');	
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function edit($id)
	{
		$category = Category::find($id);
		return view('categories.edit', compact('category'));
	}

	public function update(UpdateCategory $request, $id)
	{
		$category = Category::find($id);
		$category->update($request->all());
		$category->save();		
		return redirect('home/categories');
	}

	public function activate($id)
	{
		$category = Category::find($id);
		$category->status = 1;
		$category->save();

		return redirect('home/categories');
	}

	public function deactivate($id)
   	{
   		$category = Category::find($id);
   		$category->status = 0;
		$category->save();

      	return redirect('home/categories');
   	}
}
