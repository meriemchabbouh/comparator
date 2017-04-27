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

Route::get('/home1', function () {
    return view('pages.home1');
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

Route::get('/voitures', array(
    'as' => 'get-cars',
    'uses' => 'CarController@getCars'
));

Route::get('/voiture/{id}', array(
    'as' => 'get-car',
    'uses' => 'CarController@getCar'
));

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


//factory(App\User::class, 5)->create();
//factory(App\Provider::class, 5)->create();
//factory(App\Governorate::class, 3)->create();
//factory(App\City::class, 3)->create();
//factory(App\Brand::class, 5)->create(); // 1->5
//factory(App\Car_model::class, 30)->create();
//factory(App\Type_car::class, 3)->create();
//factory(App\Car::class, 35)->create();
//factory(App\Photo_car::class, 18)->create();
//factory(App\Cover_car::class, 35)->create();

Route::get('/getuser', array(
       'as'=>'get-user',
       'uses'=>'UserController@getUser'
));

Route::get('/getallcars', array(
       'as'=>'get-all-cars',
       'uses'=>'CarController@getAllCars'
));

Route::get('/getallcarsagence/{id_provider}', array(
       'as'=>'get-all-cars',
       'uses'=>'CarController@getAllCarsForSpecificAgence'
));

Route::get('/getimgcar/{car_id}', array(
       'as'=>'get-images-specific-car',
       'uses'=>'CarController@getImagesForSpecificCar'
));

Route::get('/getcarscity/{city_id}', array(
       'as'=>'get-cars-city',
       'uses'=>'CarController@getCarsForSpecificCity'
));

Route::get('/getcarsgovernorate/{governorate_id}', array(
       'as'=>'get-cars-governorate',
       'uses'=>'CarController@getCarsForSpecificGovernorate'
));

Route::get('/getcarstype/{type_id}', array(
       'as'=>'get-cars-type',
       'uses'=>'CarController@getCarsByType'
));

Route::post('/carandimg', array(
       'as'=>'post-car-and-img',
       'uses'=>'CarController@addCarAndImages'
));

Route::get('/addcar', array(
       'as'=>'get-add-car',
       'uses'=>'CarController@getAddcar'
));
Route::get('/editcar/{id}', array(
       'as'=>'get-edit-car',
       'uses'=>'CarController@getEditcar'
));

Route::post('/editcar', array(
       'as'=>'edit-car',
       'uses'=>'CarController@editCar'
));


Route::get('/deletecar/{car_id}', array(
       'as'=>'get-delete-car',
       'uses'=>'CarController@deleteCarAndImages'
));


// Upload file
Route::get('/upload', [
  'uses' => 'UploadController@getUpload',
  'as' => 'upload'
]);

// Upload file
Route::post('/upload', [
  'uses' => 'UploadController@postUpload',
  'as' => 'upload'
]);