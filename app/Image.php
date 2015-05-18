<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'images';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'file', 'product', 'description', 'label_id', 'status'];

	public function products() {
		return $this->belongsToMany('App\Product');
	}

	public function rank()
    {
        return $this->morphMany('App\Ranking', 'rankable');
    }

	public function label()
    {
        return $this->belongsTo('App\Label');
    }

}