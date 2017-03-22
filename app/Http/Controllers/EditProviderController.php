<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;
use App\Http\Requests;
use App\User;
use Auth;

class EditProviderController extends Controller
{
    //
    public function getEditprovider(){

       $provider = Provider::where('user_id', Auth::user()->id)->first();
       return view('pages.editproviderprofil', ['provider' => $provider]);
    }

    public function postEditprovider(Request $request){
        $id = Auth::user()->id;
        $provider = Provider::where('user_id', $id)->first();

        $provider->name = $request->input('name');
        $provider->address =$request->input('address');
        $provider->description=$request->input('description');
        $provider->phone=$request->input('phone');
        $provider->postal_code=$request->input('postal_code');
        $provider->public_email=$request->input('public_email');
        $provider->link_fb=$request->input('link_fb');
        $provider->link_instagram=$request->input('link_instagram');
        $provider->link_website=$request->input('link_website');

        if($provider->save()){
           return redirect()->route('get-editprovider');
        }
    }
}
