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
        return $this->hasMany('app\Provider');
    }
}
