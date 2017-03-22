<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Client;
use Auth;

class EditClientController extends Controller
{
    //
    public function getEditclient(){

        $client = Auth::user()->client;
        return View('pages.editclientprofil', ['client' => $client]);
    }

        public function postEditclient(Request $request){
        $client = Auth::user()->client;

        $client->last_name  = $request->input('last_name');
        $client->first_name = $request->input('first_name');
        $client->dob        = $request->input('dob');


        if($client->save()){
           return redirect()->route('get-editclient');
        }
    }
}
