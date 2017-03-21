<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
         'name', 'address', 'description','postal_code', 'phone','public_email', 'link_fb','link_instagram'	,'link_website'
    ];

    public function user()
	{
		return $this->belongsTo('app\User');
	}
}
