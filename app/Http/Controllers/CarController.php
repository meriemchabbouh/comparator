<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Car;
use App\Provider;
use App\Photo_car;

class CarController extends Controller
{
    // get all cars
    public function getAllCars()
    {
        $cars = dd(Car::all());
    }


    public function getAllCarsForSpecificAgence($id_provider)
    {
        $cars = Provider::find($id_provider)->cars;
        return dd($cars);
    }

//get image of speicifc car

    public function getImagesForSpecificCar($car_id)
    {

        $car = Car::find($car_id);
        if(empty($car)) {
            return 'no car found';
        }

        $photos = $car->photo_cars;
        return dd($photos);

    }

// delete car + images

// add car + images

// get list of cars for spedicif city

// get list of cars for specific governatges

// get all cars by types

}
