<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'articles';

	protected $dates = ['published_at'];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'body', 'published_at', 'status', 'user_id'];

	public function user() 
	{
		return $this->belongsTo('App\User');
	}

	public function tags() 
	{
		return $this->belongsToMany('App\Tag');
	}

	public function getTagListAttribute()
	{
		return $this->tags->lists('id');
	}

	public function setPublishedAtAttribute($date)
	{
		$this->attributes['published_at'] = Carbon::parse($date);
	}

	public function scopePublished($query)
	{
		$query->where('published_at', '<=', Carbon::now());
	}

	public function scopeUnpublished($query)
	{
		$query->where('published_at', '>', Carbon::now());
	}


}