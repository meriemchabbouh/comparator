<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function getUser()
    {
        echo "bonjour";
        $user = dd(User::all());
        return $user ;
   }


}
