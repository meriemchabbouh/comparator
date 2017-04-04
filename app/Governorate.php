<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{
    protected $fillable = [
        'name'
        ];

    public function providers()
    {
        return $this->hasMany('App\Provider');
    }

    public function cities()
    {
    	return $this->hasMany('App\City');
    }
}
