<?php namespace App\Http\Controllers;

use App\Ranking;
use App\Product;
use App\Http\Requests\CreateRank;

class ProductrankingsController extends Controller {

	/**
	 * Display a listing of all Brands.
	 *
	 * @return View
	 */
	public function index()
	{
		$rankings = Ranking::where('rankable_type', '=', 'App\Product')->get();
		return view('productrankings.index', compact('rankings'));
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function create()
	{
		$rankings = Ranking::where('rankable_type', '=', 'App\Product')->get();
		$products = Product::where('status', '=', '1')->orderBy('name', 'ASC')->lists('name', 'id');
		if(count($rankings))
		{
			return view('productrankings.create', compact('products', 'rankings'));
		}
		return view('productrankings.create', compact('products'));
	}

	/**
	 * Store a newly created Cruiseline.
	 *
	 * @param Request $request
	 * @param Cruiseline $brand
	 * @return mixed
	 */
	public function store(CreateRank $request)
	{
		$rankings = Ranking::where('rankable_type', '=', 'App\Product')->delete();
		$rankable_type = $request->rankable_type;
		$count = count($request->rankable_id);
		for ($i = 0; $i < $count; $i++) {
		    $ranking = Ranking::create(['rank' => $i+1, 'rankable_type' => $rankable_type, 'rankable_id' => $request->rankable_id[$i]]);
		} 
		return redirect('home/productrankings');
	}
}
