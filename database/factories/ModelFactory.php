<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker-> safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

/*$factory->define(App\Provider::class, function (Faker\Generator $faker) {
    return [
    	'name', 'address', 'description','postal_code', 'phone','public_email', 'link_fb','link_instagram'	,'link_website', 'user_id'
    	'model'=> $faker-> word,
    	'brand_id'=> $faker->unique()->numberBetween($min = 1, $max = 9),
    ];
});*/

/*$factory->define(App\Client::class, function (Faker\Generator $faker) {
    return [
    	'model'=> $faker-> word,
    	'brand_id'=> $faker->unique()->numberBetween($min = 1, $max = 9),
    ];
});*/

$factory->define(App\Brand::class, function (Faker\Generator $faker) {
    return [
    	'brand'=> $faker-> word,
    ];
});

$factory->define(App\CarModel::class, function (Faker\Generator $faker) {
    return [
    	'model'=> $faker-> word,
    	'brand_id'=> $faker->unique()->numberBetween($min = 1, $max = 9),
    ];
});

$factory->define(App\Governorate::class, function (Faker\Generator $faker) {
    return [
    	'name'=> $faker-> word,
    ];
});

$factory->define(App\City::class, function (Faker\Generator $faker) {
    return [
    	'city'=> $faker-> word,
    	'governorate_id'=> $faker->unique()->numberBetween($min = 1, $max = 9),
    ];
});

$factory->define(App\Type_car::class, function (Faker\Generator $faker) {
    return [
    	'type'=> $faker-> word,
    ];
});

/*$factory->define(App\Car::class, function (Faker\Generator $faker) {
    return [
    	
    ];
});*/


