<?php namespace App\Http\Controllers;

use App\Offer;
use App\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CreateOffer;
use App\Http\Requests\UpdateOffer;

class OffersController extends Controller {

	/**
	 * Display a listing of all Brands.
	 *
	 * @return View
	 */
	public function index()
	{
		$offers = Offer::all();
		return view('offers.index', compact('offers'));
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function create()
	{
		$products = Product::where('status', '=', '1')->orderBy('name', 'ASC')->lists('name', 'id');
		return view('offers.create', compact('products'));
	}

	/**
	 * Store a newly created Cruiseline.
	 *
	 * @param Request $request
	 * @param Cruiseline $brand
	 * @return mixed
	 */
	public function store(CreateOffer $request)
	{
		$offer = Offer::create($request->all());
		if($request->hasFile('image'))
		{
			if($request->file('image')->isValid()) 
			{
				$image = $request->file('image');
				$moveImage = $image->move(storage_path() . '/uploads', $filename = time() . '-' . $image->getClientOriginalName());
				$offer->file = $filename;
			} else {
				return redirect()->back()->withInput();
			}	
		} 
		$offer->save();
		return redirect('home/offers');
	}

	/**
	 * Display an individual Cruiseline.
	 *
	 * @param  Cruiseline $brand
	 * @return View
	 */
	public function show($id)
	{
		return redirect('home/offers');	
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function edit($id)
	{
		$offer = Offer::find($id);
		$products = Product::where('status', '=', '1')->orderBy('name', 'ASC')->lists('name', 'id');
		return view('offers.edit', compact('offer', 'products'));
	}

	public function update(UpdateOffer $request, $id)
	{
		$offer = Offer::find($id);
		$oldImage = $offer->file;
		$offer->update($request->all());
		if($request->hasFile('image'))
		{
			if($request->file('image')->isValid()) 
			{
				$image = $request->file('image');
				$moveImage = $image->move(storage_path() . '/uploads', $filename = time() . '-' . $image->getClientOriginalName());
				$offer->update(['file' => $filename]);
				File::delete(storage_path() . '/uploads/' . $oldImage);
			} else {
				return redirect()->back()->withInput();
			}
		}
		$offer->save();		
		return redirect('home/offers');
	}

	public function activate($id)
	{
		$offer = Offer::find($id);
		$offer->status = 1;
		$offer->save();

		return redirect('home/offers');
	}

	public function deactivate($id)
   	{
   		$offer = Offer::find($id);
   		$offer->status = 0;
		$offer->save();

      	return redirect('home/offers');
   	}

}
