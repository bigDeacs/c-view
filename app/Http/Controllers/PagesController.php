<?php namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\Brochure;

class PagesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	protected $data = [];

	public function __construct() {
		$this->data = [
			'brand'   => Brand::find(1)
	    ];
	}	

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Product::where('status', '=', 1)->get();
		foreach($products as $product)
		{
			$rank = $product->rank()->first();
			if(count($rank))
			{
				array_set($product, 'rank', $rank->rank);
			}
			$image = $product->images()->first();
			array_set($product, 'image', $image['file']);
		}
		$this->data['products'] = $products;
		$brochures = Brochure::where('status', '=', 1)->get();
		$count = 0;
		foreach($brochures as $brochure)
		{
			$rank = $brochure->rank()->first();
			if(count($rank))
			{
				array_set($brochure, 'rank', $rank->rank);
				$count++;
			}
			if($count == 4) { break; }
		}
		$this->data['brochures'] = $brochures;
		$data = $this->data;
		return view('index', $data);
	}

}
