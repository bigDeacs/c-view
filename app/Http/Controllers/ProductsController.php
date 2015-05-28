<?php namespace App\Http\Controllers;

use App\Product;
use App\Type;
use App\Category;
use App\Brochure;
use App\Colour;
use App\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CreateProduct;
use App\Http\Requests\UpdateProduct;

class ProductsController extends Controller {

	/**
	 * Display a listing of all Brands.
	 *
	 * @return View
	 */
	public function index()
	{
		$products = Product::all();
		return view('products.index', compact('products'));
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function create()
	{
		$types = Type::where('status', '=', '1')->orderBy('name', 'ASC')->lists('name', 'id');
		$categories = Category::where('status', '=', '1')->orderBy('name', 'ASC')->lists('name', 'id');
		$brochures = Brochure::where('status', '=', '1')->orderBy('name', 'ASC')->lists('name', 'id');
		$colours = Colour::where('status', '=', '1')->lists('name', 'id');
		return view('products.create', compact('types', 'categories', 'brochures', 'colours'));
	}

	/**
	 * Store a newly created Cruiseline.
	 *
	 * @param Request $request
	 * @param Cruiseline $brand
	 * @return mixed
	 */
	public function store(CreateProduct $request)
	{
		if($request->brochure_id == "default") 
		{
			$request->merge(array('brochure_id' => null));
		}
		$product = Product::create($request->all());
		if($request->input('colour_list') == null) {
			$product->colours()->sync([]);
		} else {
			$product->colours()->sync($request->input('colour_list'));
		}
		if($request->hasFile('images'))
		{
			$images = $request->file('images');
			foreach($images as $image) {
				$move = $image->move(storage_path() . '/uploads', $filename = time() . '-' . $image->getClientOriginalName());
				if($move) {
					$imageData = Image::create([
						'name' => $product->name,
						'file' => $filename,
						'product' => 1
					]);
					$sync[] = $imageData->id;
				}
			}
			$product->images()->sync($sync);
		}
		return redirect('home/products');
	}

	/**
	 * Display an individual Cruiseline.
	 *
	 * @param  Cruiseline $brand
	 * @return View
	 */
	public function show($id)
	{
		$product = Product::find($id);
		$images = $product->images()->get();
		return view('products.show', compact('product', 'images'));
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function edit($id)
	{
		$product = Product::find($id);
		$types = Type::where('status', '=', '1')->orderBy('name', 'ASC')->lists('name', 'id');
		$categories = Category::where('status', '=', '1')->orderBy('name', 'ASC')->lists('name', 'id');
		$brochures = Brochure::where('status', '=', '1')->orderBy('name', 'ASC')->lists('name', 'id');
		$colours = Colour::where('status', '=', '1')->lists('name', 'id');
		return view('products.edit', compact('product', 'types', 'categories', 'brochures', 'colours'));
	}

	public function update(UpdateProduct $request, $id)
	{
		if($request->brochure_id == "default") 
		{
			$request->merge(array('brochure_id' => null));
		}
		$product = Product::find($id);
		$product->update($request->all());
		$product->save();		
		if($request->input('colour_list') == null) {
			$product->colours()->sync([]);
		} else {
			$product->colours()->sync($request->input('colour_list'));
		}
		if($request->hasFile('images'))
		{
			$images = $request->file('images');
			foreach($images as $image) {
				$move = $image->move(storage_path() . '/uploads', $filename = time() . '-' . $image->getClientOriginalName());
				if($move) {
					$imageData = Image::create([
						'name' => $product->name,
						'file' => $filename
					]);
					$sync[] = $imageData->id;
				}
			}
			$oldImages = $product->images()->get();
			foreach($oldImages as $oldImage) {
				File::delete(storage_path() . '/uploads/' . $oldImage->file);
			}
			$product->images()->sync($sync);
		}
		return redirect()->route('home.products.show', [$product->id]);
	}

	public function activate($id)
	{
		$product = Product::find($id);
		$product->status = 1;
		$product->save();
		return redirect('home/products');
	}

	public function deactivate($id)
   	{
   		$product = Product::find($id);
   		$product->status = 0;
		$product->save();
      	return redirect('home/products');
   	}

}
