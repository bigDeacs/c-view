<?php namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CreateBrand;
use App\Http\Requests\UpdateBrand;

class BrandsController extends Controller {

	/**
	 * Display a listing of all Brands.
	 *
	 * @return View
	 */
	public function index()
	{
		$brand = Brand::find(1);
		return view('brands.index', compact('brand'));
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function create()
	{
		return view('brands.create');
	}

	/**
	 * Store a newly created Cruiseline.
	 *
	 * @param Request $request
	 * @param Cruiseline $brand
	 * @return mixed
	 */
	public function store(CreateBrand $request)
	{
		$brand = Brand::create($request->all());
		if($request->hasFile('logo'))
		{
			if($request->file('logo')->isValid()) 
			{
				$logo = $request->file('logo');
				$moveLogo = $logo->move(storage_path() . '/images', $filename = time() . '-' . $logo->getClientOriginalName());
				$brand->logo = $filename;
			} else {
				return redirect()->back()->withInput();
			}	
			$brand->save();	
		} 
		return redirect('brands');
	}

	/**
	 * Display an individual Cruiseline.
	 *
	 * @param  Cruiseline $brand
	 * @return View
	 */
	public function show($id)
	{
		$brand = Brand::find($id);
		return view('brands.show', compact('brand'));
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function edit($id)
	{
		$brand = Brand::find($id);
		return view('brands.edit', compact('brand'));
	}

	public function update(UpdateBrand $request, $id)
	{
		$brand = Brand::find($id);
		$oldLogo = $brand->logo;
		$brand->update($request->all());
		if($request->hasFile('logo'))
		{
			if($request->file('logo')->isValid()) 
			{
				$logo = $request->file('logo');
				$moveLogo = $logo->move(storage_path() . '/images', $filename = time() . '-' . $logo->getClientOriginalName());
				$brand->update(['logo' => $filename]);
				File::delete(storage_path() . '/images/' . $oldLogo);
			} else {
				return redirect()->back()->withInput();
			}
		}
		$brand->save();		
		return redirect('brands');
	}

}
