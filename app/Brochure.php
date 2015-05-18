<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Brochure extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'brochures';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'file', 'thumb', 'label_id', 'description', 'status'];

	public function products()
    {
        return $this->hasMany('App\Product');
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