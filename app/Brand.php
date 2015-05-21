<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'brand';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'logo', 'website', 'address', 'email', 'phone', 'fax', 'about', 'color1', 'color2', 'color3', 'color4', 'facebook', 'twitter', 'google', 'instagram', 'yellow', 'pinterest', 'vimeo', 'youtube', 'houzz'];

}
