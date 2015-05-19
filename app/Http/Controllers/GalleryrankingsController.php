<?php namespace App\Http\Controllers;

use App\Ranking;
use App\Image;
use App\Http\Requests\CreateRank;

class GalleryrankingsController extends Controller {

	/**
	 * Display a listing of all Brands.
	 *
	 * @return View
	 */
	public function index()
	{
		$rankings = Ranking::where('rankable_type', '=', 'App\Image')->get();
		return view('galleryrankings.index', compact('rankings'));
	}

	/**
	 * Show the form for creating a new Cruiseline.
	 *
	 * @return View
	 */
	public function create()
	{
		$rankings = Ranking::where('rankable_type', '=', 'App\Image')->get();
		$images = Image::where('status', '=', '1')->where('product', '=', 0)->orderBy('name', 'ASC')->lists('name', 'id');
		if(count($rankings))
		{
			return view('galleryrankings.create', compact('images', 'rankings'));
		}
		return view('galleryrankings.create', compact('images'));
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
		$rankings = Ranking::where('rankable_type', '=', 'App\Image')->delete();
		$rankable_type = $request->rankable_type;
		$count = count($request->rankable_id);
		for ($i = 0; $i < $count; $i++) {
		    $ranking = Ranking::create(['rank' => $i+1, 'rankable_type' => $rankable_type, 'rankable_id' => $request->rankable_id[$i]]);
		} 
		return redirect('home/galleryrankings');
	}
}
