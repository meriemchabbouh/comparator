<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
	protected $table = 'models';
    protected $fillable = [
    	'model'
    	];

	public function brand()
	{
		return $this->belongsTo('App\brand');
	}

	public function cars()
	{
		return $this->hasMany('App\Car');
	}
}
