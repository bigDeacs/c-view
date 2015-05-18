<?php namespace App\Http\Controllers;

use App\Image;
use App\Label;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CreateImage;
use App\Http\Requests\UpdateImage;

class GalleriesController extends Controller {

	/**
	 * Display a listing of all Brands.
	 *
	 * @return View
	 */
	public function index()
	{
		$images = Image::where('product', '=', 0)->get();
		return view('galleries.index', compact('images'));
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function create()
	{
		$labels = Label::where('status', '=', '1')->where('type', '=', 'Image')->orderBy('name', 'ASC')->lists('name', 'id');
		return view('galleries.create', compact('labels'));
	}

	/**
	 * Store a newly created Cruiseline.
	 *
	 * @param Request $request
	 * @param Cruiseline $brand
	 * @return mixed
	 */
	public function store(CreateImage $request)
	{
		$image = Image::create($request->all());
		if($request->hasFile('image'))
		{
			if($request->file('image')->isValid()) 
			{
				$upload = $request->file('image');
				$moveUpload = $upload->move(storage_path() . '/images', $filename = time() . '-' . $upload->getClientOriginalName());
				$image->file = $filename;
			} else {
				return redirect()->back()->withInput();
			}
		} 
		$image->save();
		return redirect('galleries');
	}

	/**
	 * Display an individual Cruiseline.
	 *
	 * @param  Cruiseline $brand
	 * @return View
	 */
	public function show($id)
	{
		return redirect('galleries');	
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function edit($id)
	{
		$image = Image::find($id);
		$labels = Label::where('status', '=', '1')->where('type', '=', 'Image')->orderBy('name', 'ASC')->lists('name', 'id');
		return view('galleries.edit', compact('image', 'labels'));
	}

	public function update(UpdateImage $request, $id)
	{
		$image = Image::find($id);
		$oldUpload = $image->file;
		$image->update($request->all());
		if($request->hasFile('image'))
		{
			if($request->file('image')->isValid()) 
			{
				$upload = $request->file('image');
				$moveUpload = $upload->move(storage_path() . '/images', $filename = time() . '-' . $upload->getClientOriginalName());
				$image->update(['file' => $filename]);
				File::delete(storage_path() . '/images/' . $oldUpload);
			} else {
				return redirect()->back()->withInput();
			}
		}
		$image->save();		
		return redirect('galleries');
	}

	public function activate($id)
	{
		$image = Image::find($id);
		$image->status = 1;
		$image->save();

		return redirect('galleries');
	}

	public function deactivate($id)
   	{
   		$image = Image::find($id);
   		$image->status = 0;
		$image->save();

      	return redirect('galleries');
   	}

}
