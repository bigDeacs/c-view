<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'labels';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'type', 'status'];

	public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function brochures()
    {
        return $this->hasMany('App\Brochure');
    }

}
