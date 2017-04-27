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
		return $this->belongsTo('App\Car_model',  'car_model_id');
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
		return $this->hasMany('App\photo_car','car_id');
	}
    
    public function cover_cars()
	{
		return $this->hasMany('App\Cover_car');
	}

	public function provider()
	{
		return $this->belongsTo('App\Provider');
	}


	public function getDefaultImage() {
		$photos = $this->photo_cars;
		if($photos->count() > 0){
			return $photos->first()->photo;
		}
		return 'http://www.mercedes-benz.co.uk/content/media_library/unitedkingdom/mpc_unitedkingdom/passenger_cars_ng/products/new_cars/model_navigation_imagery/a-Class-feb-12-2016.object-Single-MEDIA.tmp/A-Class-feb-12-2016.jpg';
		
	}

	public function getName() {
		$model = $this->model->model;
		$brand = $this->model->brand->brand;
		$name = $brand . ' ' .$model;
		return $name;
	}
}
