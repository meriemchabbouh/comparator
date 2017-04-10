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
        'id' => $faker->unique()->numberBetween($min = 1, $max = 5),
        'email' => $faker-> safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Provider::class, function (Faker\Generator $faker) {
    return [
            'id' => $faker->unique()->numberBetween($min = 1, $max = 5),
            'name' => $faker-> name,
            'address' => $faker-> address,
            'description' => $faker-> sentence,
            'postal_code' => $faker-> safeEmail,
            'phone' => $faker->phoneNumber,
            'public_email' => $faker-> safeEmail,
            'link_fb' => $faker-> sentence,
            'link_instagram' => $faker-> sentence,
            'link_website' => $faker-> sentence,
    	    'user_id'=> $faker->numberBetween($min = 1, $max = 5),
    ];
});

/*$factory->define(App\Client::class, function (Faker\Generator $faker) {
    return [
    	'model'=> $faker-> word,
    	'brand_id'=> $faker->unique()->numberBetween($min = 1, $max = 9),
    ];
});*/

// 5 records
$factory->define(App\Brand::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->unique()->numberBetween($min = 1, $max = 5), // 1 2 3 4 et 5 seuelement
    	'brand'=> $faker-> word,
    ];
});

//
$factory->define(App\Car_model::class, function (Faker\Generator $faker) {
    return [
    	'model'=> $faker-> word,
    	'brand_id'=> $faker->numberBetween($min = 1, $max = 5),
    ];
});

$factory->define(App\Governorate::class, function (Faker\Generator $faker) {
    return [
        'id' => $faker->unique()->numberBetween($min = 1, $max = 9),
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
        'id' => $faker->unique()->numberBetween($min = 1, $max = 3), // 1 2 et 3
    	'type'=> $faker-> word,
    ];
});

$factory->define(App\Car::class, function (Faker\Generator $faker) {
    return [
        'id'                    => $faker->unique()->numberBetween($min = 1, $max = 50),
        'air_conditioner'       => $faker->boolean,
        'number_of_seats'       => $faker->numberBetween($min = 1, $max = 9),
        'number_of_doors'       => $faker->numberBetween($min = 1, $max = 5),
        'number_of_passengers'  => $faker->numberBetween($min = 1, $max = 9),
        'consumption'           => $faker->word,
        'gps'                   => $faker->boolean,
        'transmission'          => $faker->word,
        'airbag'                => $faker->boolean,
        'abs'                   => $faker->boolean,
        'year'                  => $faker->year($max = 'now'),
        'exteriror_color'       => $faker->safeColorName ,
        'interior_color'        => $faker->safeColorName ,
        'fuel'                  => $faker->word,
        'engine'                => $faker->word,
        'car_model_id'          => $faker->numberBetween($min = 1, $max = 30),
        'city_id'               => $faker->numberBetween($min = 1, $max = 3),
        'type_car_id'           => $faker->numberBetween($min = 1, $max = 3),
    	'provider_id'           => $faker->numberBetween($min = 1, $max = 5),
    ];
});

$factory->define(App\Photo_car::class, function (Faker\Generator $faker) {
    return [
        'photo' => $faker-> imageUrl($width = 640, $height = 480),
        'car_id' => $faker->numberBetween($min = 1, $max = 50),
    ];
});

$factory->define(App\Cover_car::class, function (Faker\Generator $faker) {
    return [
        'cover' => $faker-> imageUrl($width = 640, $height = 480),
        'car_id' => $faker->numberBetween($min = 1, $max = 50),
    ];
});


