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
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Mail;
use Hash;



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

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $user                       = new User;
        
        $user->email                = $request->input('email');
        $user->password             = bcrypt($request->input('password'));
        $user->type                 = $request->input('type');
        $user->active               = 0;
        $user->activation_code      = str_random(60);

        if ($user->save()) {

            if($user->type == '1'){
                $provider = new Provider;
                $user->provider()->save($provider);
            }
            else{
                $client = new Client;
                $user->client()->save($client);
            }

            // envoie mail
            Mail::send('emails.account_activation', ['activation_code' => $user->activation_code], function ($m) use ($user) {
                $m->from('comparator.contact@gmail.com', 'Comparator');

                $m->to($user->email, '')->subject('Account activation');
            });

            notify()->flash('Compte crée', 'success', [
                'text' => 'Verifiez votre email à fin d\'activer votre compte',
            ]);

            return redirect('/');

         
        }

        notify()->flash('Erreur', 'error', [
            'timer' => 5000,
            'text' => 'Erreur pendant la creation de votre compte. SVP contactez un administrateur',
        ]);

        return redirect()->back();


    }

    public function getLogin(){

        return view('pages.login');
    }

    public function postLogin(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email:users',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {

            $type= Auth::user()->type;
            if($type==1){
                return redirect()->route('get-editprovider');
            }
            else{
                return redirect()->route('get-editclient');
            }
        }
        else {

            notify()->flash('Erreur', 'error', [
            'text' => 'ce compte n\'existe pas',
            ]);

            return redirect()->back();
         }

    }

    public function getLogout(){
            Auth::logout();
            return redirect('/');
    }

    public function getActivateAccount($activation_code){
        $user = User::where('activation_code', '=' , $activation_code)->where('active', '=', 0)->first();

        if(!empty($user)) {
            $user->active = 1;
            $user->activation_code = null;
            $user->save();


            Auth::login($user);

            return redirect('/');
        } else {
            return 'Code d\'activation n est pas correct';
        }

    }


    public function getResetPassword() {
        return view('pages.reset-password');
    }

    public function postResetPassword(Request $request) {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email:users',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }


        $email = $request->get('email');

        $user = User::where('email', '=', $email)->first();

        if(empty($user)){
            // oc1 utilisateur trouver avec ce mail
            return redirect()->route('get-reset-password');
        } else {
            $user->reset_password_code = str_random(60); // token
            $user->temp_password = str_random(7); // temp password
            $user->save();
            // send email with link & new code
            // envoie mail
            Mail::send('emails.reset-password', ['user' => $user], function ($m) use ($user) {
                $m->from('comparator.contact@gmail.com', 'Comparator');

                $m->to($user->email, '')->subject('Reset Password');
            });

            notify()->flash('password oublier', 'success', [
                'text' => 'Verifiez votre email pour trouver votre nouveau password',
            ]);

            return redirect('/');

        }

    }

    public function getResetPasswordToken($reset_password_token) {
        $user = User::where('reset_password_code', $reset_password_token)->where('active',1)->first();

        if(empty($user)){
            return redirect('/');
        }

        $user->password= bcrypt($user->temp_password);
        $user->reset_password_code = null;
        $user->temp_password = null;

        if($user->save()){
            return redirect('/login');
        } else {
            return redirect('/');
        }
    }

}

