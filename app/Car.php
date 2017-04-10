<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
    	'air_conditioner', 'number_of_seats','number_of_doors','number_of_passengers','consumption',
    	'gps','transmission','airbag','abs','year','exteriror_color','interior_color','fuel','engine'
    	];

	public function model()
	{
		return $this->belongsTo('App\Car_model');
	}

	public function type_car()
	{
		return $this->belongsTo('App\Type_car');
	}

	public function city()
	{
		return $this->belongsTo('App\City');
	}

	public function photo_cars()
	{
		return $this->hasMany('App\Photo_car');
	}
    
    public function cover_cars()
	{
		return $this->hasMany('App\Cover_car');
	}

	public function provider()
	{
		return $this->belongsTo('App\Provider');
	}
}
