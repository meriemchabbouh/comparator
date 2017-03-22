<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
	protected $table = 'providers';
    protected $fillable = [
         'name', 'address', 'description','postal_code', 'phone','public_email', 'link_fb','link_instagram'	,'link_website', 'user_id'
    ];

    public function user()
	{
		return $this->belongsTo('app\User', 'user_id');
	}
}
