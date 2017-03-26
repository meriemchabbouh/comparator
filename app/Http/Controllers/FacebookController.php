<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Socialite;
use App\User;
use App\Client;
use Mail;
use Hash;
use Auth;

class FacebookController extends Controller
{
        /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {

        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback(Request $Request)
    {
           $user = Socialite::driver('facebook')->user(); // <-- exception is thrown here
           $fbId = $user->getId();
           $fbEmail = $user->getEmail();

           // si fbid existe deja dans la base ---> login
           // si nn si fb id n'existe pas et email exisre ---> ajout id fb + login
           // sii nn (first time register) -> create nbew user with ermail + fb id + genereate password and send email*


           $user = User::where('facebook_id', $fbId)->first();
           if(!empty($user)) {
                Auth::login($user);
                return redirect('/');
           } else {
                 $user = User::where('email', $fbEmail)->first();
                 if(!empty($user)) {
                    $user->facebook_id = $fbId;
                    $user->save();
                    Auth::login($user);
                    return redirect('/');
                 } else {
                    $password = str_random(7);
                    $user = new User();
                    $user->email                = $fbEmail;
                    $user->password             = bcrypt($password);
                    $user->type                 = 2;
                    $user->active               = 1;
                    $user->facebook_id = $fbId;
                    $user->save();



                     $client = new Client;
                    $user->client()->save($client);



                      Auth::login($user);

                    // envoie mail
                    Mail::send('emails.new_account_facebook', ['user' => $user, 'password'=>$password], function ($m) use ($user) {
                        $m->from('comparator.contact@gmail.com', 'Comparator');

                        $m->to($user->email, '')->subject('Social login');
                    });






                 }
           }

           return redirect('/');

    }
}

