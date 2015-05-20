<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'offers';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['promo', 'file', 'product_id', 'status'];

	public function product()
    {
        return $this->belongsTo('App\Product');
    }

}