<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'first_name','last_name','DOB','gender','phone'
    ];


    public function user()
	{
		return $this->belongsTo('app\User');
	}
}
