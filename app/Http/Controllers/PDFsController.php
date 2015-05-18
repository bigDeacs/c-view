<?php namespace App\Http\Controllers;

class PDFsController extends Controller {

	/**
	 * Display a listing of all Brands.
	 *
	 * @return View
	 */
	public function index()
	{
		return view('pdfs.index');
	}

}
