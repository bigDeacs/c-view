<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'rankings';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['rank', 'rankable_id', 'rankable_type', 'status'];

    public function rankable()
    {
        return $this->morphTo();
    }

}
