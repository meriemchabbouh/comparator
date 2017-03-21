<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
         'email', 'password','facebook_id', 'type','confirm'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
 
    ];


     public function client()
    {
        return $this->hasOne('app\Client');
    }

    public function provider()
    {
        return $this->hasOne('app\Provider');
    }
}
