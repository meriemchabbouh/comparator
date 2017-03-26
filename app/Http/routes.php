<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('pages.home');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/wishlist', function () {
    return view('pages.wishlist');
});

Route::get('/all_hotels_list', function () {
    return view('pages.all_hotels_list');
});

Route::get('/single_hotel', function () {
    return view('pages.single_hotel');
});

Route::get('/cart_hotel', function () {
    return view('pages.cart_hotel');
});

Route::get('/payment_hotel', function () {
    return view('pages.payment_hotel');
});

Route::get('/confirmation_hotel', function () {
    return view('pages.confirmation_hotel');
});

Route::get('/invoice', function () {
    return view('pages.invoice');
});

Route::get('/test', function () {
    return view('pages.test');
});

Route::get('/voitures', function () {
    return view('pages.all_voitures_list');
});

Route::get('/single_voiture', function () {
    return view('pages.single_voiture');
});

Route::get('/cart_voiture', function () {
    return view('pages.cart_voiture');
});

Route::get('/payment_voiture', function () {
    return view('pages.payment_voiture');
});

Route::get('/confirmation_voiture', function () {
    return view('pages.confirmation_voiture');
});

Route::get('/register', array(
    'as' => 'get-register',
    'uses' => 'Auth\AuthController@getRegister'
));

Route::post('/register', array(
    'as' => 'post-register',
    'uses' => 'Auth\AuthController@postRegister'
));

Route::get('/login', array(
    'middleware' => 'guest',
    'as' => 'get-login',
    'uses' => 'Auth\AuthController@getLogin'
));

Route::post('/login', array(
    'as' => 'post-login',
    'uses' => 'Auth\AuthController@postLogin'
));

Route::get('/logout', array(
    'as' => 'get-logout',
    'uses' => 'Auth\AuthController@getLogout'
));

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/editprovider', array(
    'middleware' => 'auth',
    'as' => 'get-editprovider',
    'uses' => 'EditProviderController@getEditprovider'
));

Route::post('/editprovider', array(
    'middleware' => 'auth',   
    'as' => 'post-editprovider',
    'uses' => 'EditProviderController@postEditprovider'
));

Route::get('/editclient', array(
    'as' => 'get-editclient',
    'uses' => 'EditClientController@getEditclient'
));


Route::post('/editclient', array(
    'as' => 'post-editclient',
    'uses' => 'EditClientController@postEditclient'
));

Route::get('login/facebook','FacebookController@redirectToProvider');
Route::get('facebooklogin/callback', 'FacebookController@handleProviderCallback');




// activate account
Route::get('activate-account/{activation_code}', array(
    'as' => 'get-activate-account',
    'uses' => 'Auth\AuthController@getActivateAccount'
));


// reset password
Route::get('reset-password', array(
    'as' => 'get-reset-password',
    'uses' => 'Auth\AuthController@getResetPassword'
));

// reset password
Route::post('reset-password', array(
    'as' => 'post-reset-password',
    'uses' => 'Auth\AuthController@postResetPassword'
));


Route::get('reset-password-token/{reset_password_token}', array(
    'as' => 'get-reset-password-token',
    'uses' => 'Auth\AuthController@getResetPasswordToken'
));
