<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
    	'city'
    	];

	public function governorate()
	{
		return $this->belongsTo('App\Governorate');
	}

	public function cars()
	{
		return $this->hasMany('App\Car');
	}
}
