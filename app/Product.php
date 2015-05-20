<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'products';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'description', 'features', 'options', 'url', 'type_id', 'category_id', 'brochure_id', 'video', 'status', 'meta', 'head', 'scripts'];

	public function images() {
		return $this->belongsToMany('App\Image');
	}

	public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function colours() 
	{
		return $this->belongsToMany('App\Colour');
	}

    public function brochure()
    {
        return $this->belongsTo('App\Brochure');
    }

    public function offers()
    {
        return $this->hasMany('App\Offer');
    }

    public function rank()
    {
        return $this->morphMany('App\Ranking', 'rankable');
    }

    public function getColourListAttribute()
	{
		return $this->colours->lists('id');
	}

}
