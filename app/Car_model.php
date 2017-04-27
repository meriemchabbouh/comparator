<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car_model extends Model
{
    protected $fillable = [
    	'model'
    	];

	public function brand()
	{
		return $this->belongsTo('App\brand', 'brand_id');
	}

	public function cars()
	{
		return $this->hasMany('App\Car');
	}
}
