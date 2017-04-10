<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cover_car extends Model
{
    protected $fillable = [
      	'cover'
    ];

    public function car()
    {
    	return $this->belongsTo('App\Car');
    }
}
