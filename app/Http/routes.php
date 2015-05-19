<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

# Admin

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['before' => 'auth', 'prefix' => 'home'], function()
{	
	Route::get('/', 'HomeController@index');

	# Products
	Route::get('products/{products}/activate', ['as' => 'products.activate', 'uses' => 'ProductsController@activate']);
	Route::get('products/{products}/deactivate', ['as' => 'products.deactivate', 'uses' => 'ProductsController@deactivate']);
	Route::resource('products', 'ProductsController', ['except' => ['destroy']]);

	# Types
	Route::get('types/{types}/activate', ['as' => 'types.activate', 'uses' => 'TypesController@activate']);
	Route::get('types/{types}/deactivate', ['as' => 'types.deactivate', 'uses' => 'TypesController@deactivate']);
	Route::resource('types', 'TypesController', ['except' => ['destroy']]);

	# Categories
	Route::get('categories/{categories}/activate', ['as' => 'categories.activate', 'uses' => 'CategoriesController@activate']);
	Route::get('categories/{categories}/deactivate', ['as' => 'categories.deactivate', 'uses' => 'CategoriesController@deactivate']);
	Route::resource('categories', 'CategoriesController', ['except' => ['destroy']]);

	# Brochures
	Route::get('brochures/{brochures}/activate', ['as' => 'brochures.activate', 'uses' => 'BrochuresController@activate']);
	Route::get('brochures/{brochures}/deactivate', ['as' => 'brochures.deactivate', 'uses' => 'BrochuresController@deactivate']);
	Route::resource('brochures', 'BrochuresController', ['except' => ['destroy']]);

	# PDFs
	Route::resource('pdfs', 'PDFsController', ['only' => ['index']]);

	# Colours
	Route::get('colours/{colours}/activate', ['as' => 'colours.activate', 'uses' => 'ColoursController@activate']);
	Route::get('colours/{colours}/deactivate', ['as' => 'colours.deactivate', 'uses' => 'ColoursController@deactivate']);
	Route::resource('colours', 'ColoursController', ['except' => ['destroy']]);

	# Product Rankingss
	Route::resource('productrankings', 'ProductrankingsController', ['except' => ['destroy']]);

	# Brochure Rankingss
	Route::resource('brochurerankings', 'BrochurerankingsController', ['except' => ['destroy']]);

	# Gallery Rankingss
	Route::resource('galleryrankings', 'GalleryrankingsController', ['except' => ['destroy']]);

	# Article
	Route::get('articles/{articles}/activate', ['as' => 'articles.activate', 'uses' => 'ArticlesController@activate']);
	Route::get('articles/{articles}/deactivate', ['as' => 'articles.deactivate', 'uses' => 'ArticlesController@deactivate']);
	Route::resource('articles', 'ArticlesController', ['except' => ['destroy']]);

	# Images
	Route::get('galleries/{galleries}/activate', ['as' => 'galleries.activate', 'uses' => 'GalleriesController@activate']);
	Route::get('galleries/{galleries}/deactivate', ['as' => 'galleries.deactivate', 'uses' => 'GalleriesController@deactivate']);
	Route::resource('galleries', 'GalleriesController', ['except' => ['destroy']]);

	# Types
	Route::get('imagelabels/{imagelabels}/activate', ['as' => 'imagelabels.activate', 'uses' => 'ImagelabelsController@activate']);
	Route::get('imagelabels/{imagelabels}/deactivate', ['as' => 'imagelabels.deactivate', 'uses' => 'ImagelabelsController@deactivate']);
	Route::resource('imagelabels', 'ImagelabelsController', ['except' => ['destroy']]);

	# Types
	Route::get('brochurelabels/{brochurelabels}/activate', ['as' => 'brochurelabels.activate', 'uses' => 'BrochurelabelsController@activate']);
	Route::get('brochurelabels/{brochurelabels}/deactivate', ['as' => 'brochurelabels.deactivate', 'uses' => 'BrochurelabelsController@deactivate']);
	Route::resource('brochurelabels', 'BrochurelabelsController', ['except' => ['destroy']]);

	# Brand
	Route::resource('brands', 'BrandsController', ['except' => ['destroy']]);
});

Route::get('images/{image}', function($image)
{
	$filepath = storage_path() . '/images/' . $image;
	return Response::download($filepath);
});

Route::get('uploads/{upload}', function($upload)
{
	$filepath = storage_path() . '/uploads/' . $upload;
	$content = file_get_contents($filepath);
	return Response::make($content, 200, ['content-type' => 'application/pdf']);
});

Route::get('thumbs/{thumb}', function($thumb)
{
	$filepath = storage_path() . '/thumbs/' . $thumb;
	return Response::download($filepath);
});

# Website
Route::get('/', 'PagesController@index');
Route::get('windows', 'PagesController@windows');
Route::get('window/{id}', 'PagesController@window');
Route::get('doors', 'PagesController@doors');
Route::get('door/{id}', 'PagesController@door');
Route::get('commercials', 'PagesController@commercials');
Route::get('commercial/{id}', 'PagesController@commercial');
Route::get('screens', 'PagesController@screens');
Route::get('screen/{id}', 'PagesController@screen');
Route::get('brochures', 'PagesController@brochures');
Route::get('faqs/{id}', 'PagesController@faqs');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::post('contact', ['as' => 'contactRequest', 'uses' => 'PagesController@contactRequest']);
Route::get('thankyou', 'PagesController@thankyou');
Route::get('privacy', 'PagesController@privacy');