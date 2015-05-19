<?php namespace App\Http\Controllers;

use App\Http\Requests\HelpRequest;
use Mail;

class HelpController extends Controller {

	public function help()
	{
		return view('help.index');
	}

	public function helpRequest(HelpRequest $request)
	{
		Mail::send('emails.help',
	        ['name' => $request->get('name'), 'email' => $request->get('email'), 'problem' => $request->get('problem')], function($message)
	   	 	{
	        	$message->from('donotreply@c-view.com.au');
	        	$message->to('brentdeacon23@gmail.com.au', 'Admin')->subject('C-View Help Request');
	    	}
	    );
	    return redirect('thankyou');
	}

	public function thankyou()
	{
		return view('help.thankyou');
	}

}
