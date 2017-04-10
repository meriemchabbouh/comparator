<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo_car extends Model
{
    protected $fillable = [
      	'photo'
    ];

    public function car()
    {
    	return $this->belongsTo('App\Car');
    }
}
