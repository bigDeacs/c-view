<?php namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\Brochure;
use App\Label;
use Mail;
use App\Http\Requests\ContactRequest;

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

	public function windows()
	{
		$this->data['products'] = Product::where('status', '=', 1)->whereHas('category', function($q)
		{
		    $q->where('name', '=', 'Windows');

		})->get();
		$data = $this->data;
		return view('windows', $data);
	}

	public function window($id)
	{
		$this->data['product'] = Product::where('url', '=', $id)->where('status', '=', 1)->first();
		$this->data['products'] = Product::where('url', '!=', $id)->where('status', '=', 1)->whereHas('category', function($q)
		{
		    $q->where('name', '=', 'Windows');

		})->take(4)->get();
		$data = $this->data;
		return view('window', $data);
	}

	public function doors()
	{
		$this->data['products'] = Product::where('status', '=', 1)->whereHas('category', function($q)
		{
		    $q->where('name', '=', 'Doors');

		})->get();
		$data = $this->data;
		return view('doors', $data);
	}

	public function door($id)
	{
		$this->data['product'] = Product::where('url', '=', $id)->where('status', '=', 1)->first();
		$this->data['products'] = Product::where('url', '!=', $id)->where('status', '=', 1)->whereHas('category', function($q)
		{
		    $q->where('name', '=', 'Doors');

		})->take(4)->get();
		$data = $this->data;
		return view('door', $data);
	}

	public function commercials()
	{
		$this->data['products'] = Product::where('status', '=', 1)->whereHas('category', function($q)
		{
		    $q->where('name', '=', 'Commercial');

		})->get();
		$data = $this->data;
		return view('commercials', $data);
	}

	public function commercial($id)
	{
		$this->data['product'] = Product::where('url', '=', $id)->where('status', '=', 1)->first();
		$this->data['products'] = Product::where('url', '!=', $id)->where('status', '=', 1)->whereHas('category', function($q)
		{
		    $q->where('name', '=', 'Commercial');

		})->take(4)->get();
		$data = $this->data;
		return view('commercial', $data);
	}

	public function screens()
	{
		$this->data['products'] = Product::where('status', '=', 1)->whereHas('category', function($q)
		{
		    $q->where('name', '=', 'Screens');

		})->get();
		$data = $this->data;
		return view('screens', $data);
	}

	public function screen($id)
	{
		$this->data['product'] = Product::where('url', '=', $id)->where('status', '=', 1)->first();
		$this->data['products'] = Product::where('url', '!=', $id)->where('status', '=', 1)->whereHas('category', function($q)
		{
		    $q->where('name', '=', 'Screens');

		})->take(4)->get();
		$data = $this->data;
		return view('screen', $data);
	}

	public function brochures()
	{
		$this->data['brochures'] = Brochure::where('status', '=', 1)->get();
		$this->data['labels'] = Label::where('status', '=', 1)->where('type', '=', 'Brochure')->get();
		$data = $this->data;
		return view('brochures', $data);
	}

	public function faqs($id)
	{
		$data = $this->data;
		return view('faqs/' . $id, $data);
	}

	public function about()
	{
		$data = $this->data;
		return view('about', $data);
	}

	public function contact()
	{
		$data = $this->data;
		return view('contact', $data);
	}

	public function contactRequest(ContactRequest $request)
	{
		Mail::send('emails.contact',
	        ['name' => $request->get('name'), 'email' => $request->get('email'), 'phone' => $request->get('phone'), 'info' => $request->get('info')], function($message)
	   	 	{
	        	$message->from('sales@c-view.com.au');
	        	$message->to('brentdeacon23@gmail.com', 'Admin')->subject('C-View Windows Contact Request');
	    	}
	    );
	    return redirect('thankyou');
	}

	public function thankyou()
	{
		$data = $this->data;
		return view('thankyou', $data);
	}

	public function privacy()
	{
		$data = $this->data;
		return view('privacy', $data);
	}

}
