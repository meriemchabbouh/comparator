<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_car extends Model
{
    protected $fillable = [
        'type'
    	];

    public function cars()
    {
    	return $this->hasMany('App\Car');
    }
}
