<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Provider;
use App\Client;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
   /* protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }
    */

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function getRegister(){

        return view('pages.register');
    }

    public function postRegister(Request $request){

    
       /*$validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }*/

        $activation_code            = str_random(60) . $request->input('email');
        $user                       = new User;
        
        $user->email                = $request->input('email');
        $user->password             = bcrypt($request->input('password'));
        $user->confirm              = $request->input('confirm');
        $user->type                 = $request->input('type');
        $user->activation_code      = $activation_code;

       if ($user->save()) {

        if($user->type == '1'){
            $provider = new Provider;
            $user->provider()->save($provider);
        }
        else{
            $client = new Client;
            $user->client()->save($client);
        }
     
        }


    }

    public function getLogin(){

        return view('pages.login');
    }

    public function postLogin(Request $request){

        $email                = $request->input('email');
        $password             = ($request->input('password'));

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect('/');
        }
         else {
            return redirect()->back();
         }

    }

        public function getLogout(){
            Auth::logout();
            return redirect('/');
    }


}

