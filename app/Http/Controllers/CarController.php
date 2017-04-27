<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Car;
use App\Provider;
use App\Photo_car;
use App\City;
use App\Brand;
use App\Car_model;
use App\Governorate;
use App\Type_car;

class CarController extends Controller
{
    public function getCars()
    {
        $cars = Car::where('id', '!=', 1)->paginate(10);

        return view('pages.cars')->with([
            'cars' => $cars
        ]);
    }


    public function getAllCarsForSpecificAgence($id_provider)
    {
        $cars = Provider::find($id_provider)->cars;
        return dd($cars);
    }

    public function getCar($id)
    {
        $car = Car::findOrFail($id);
        return view('pages.single_car')->with('car', $car);
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
    public function deleteCarAndImages($car_id)
    {
        $car =Car::find($car_id);


        $photos = $car->photo_cars()->delete();

        $car->delete();

    }



    public function getAddcar()
    {   $brands  =Brand::all();
        $models = Car_model::all();
        $types = Type_car::all();
        $cities = City::all();
        $governorates = Governorate::all();
        return view('pages.addcar', ['brands' => $brands, 'models'=>$models , 'types'=>$types , 'cities'=>$cities , 'governorates'=>$governorates ]);
    }

// add car + images
    public function addCarAndImages(Request $request)
    {  
        $car                       = new Car;
dd($request);
        $car->air_conditioner      = $request->input('air_conditioner');
        $car->number_of_seats      = $request->input('number_of_seats');
        $car->number_of_doors      = $request->input('number_of_doors');
        $car->number_of_passengers = $request->input('number_of_passengers');
        $car->consumption          = $request->input('consumption');
        $car->gps                  = $request->input('gps');
        $car->transmission         = $request->input('transmission');
        $car->airbag               = $request->input('airbag');
        $car->abs                  = $request->input('abs');
        $car->year                 = $request->input('year');
        $car->exteriror_color      = $request->input('exteriror_color');
        $car->interior_color       = $request->input('interior_color');
        $car->fuel                 = $request->input('fuel');
        $car->engine               = $request->input('engine');
        $car->car_model_id         = $request->input('car_model_id');       
        $car->city_id              = $request->input('city_id');
        $car->type_car_id          = $request->input('type_car_id');
        $car->provider_id          = 1 ;

        $car->save();

           

            //$car->photo_car()->save($photo_car);
        
      
    }
    public function getEditcar($id)
    {
       $car =Car::find($id);
        return view('pages.edit_car', ['car' => $car ]);
     
    
    }
    public function editCar(Request $request)
    {
        $car                       = new Car;

        $car->air_conditioner      = $request->input('air_conditioner');
        $car->number_of_seats      = $request->input('number_of_seats');
        $car->number_of_doors      = $request->input('number_of_doors');
        $car->number_of_passengers = $request->input('number_of_passengers');
        $car->consumption          = $request->input('consumption');
        $car->gps                  = $request->input('gps');
        $car->transmission         = $request->input('transmission');
        $car->airbag               = $request->input('airbag');
        $car->abs                  = $request->input('abs');
        $car->year                 = $request->input('year');
        $car->exteriror_color      = $request->input('exteriror_color');
        $car->interior_color       = $request->input('interior_color');
        $car->fuel                 = $request->input('fuel');
        $car->engine               = $request->input('engine');
        $car->car_model_id         = $request->input('car_model_id');       
        $car->city_id              = $request->input('city_id');
        $car->type_car_id          = $request->input('type_car_id');
        $car->provider_id          = $request->input('provider_id');

        $car->save();

        
    
    }

// get list of cars for spedicif city
    public function getCarsForSpecificCity($city_id)
    {
        $cars = City::find($city_id)->cars;
        return dd($cars);
    }

// get list of cars for specific governatges
    public function getCarsForSpecificGovernorate($governorate_id)
    {
        $cities = Governorate::find($governorate_id)->cities;

        foreach ($cities as $city) 
        {
             dd($city->cars);
        }
        
    }

// get all cars by types
    public function getCarsByType($type_id)
    {
        $cars = Type_car::find($type_id)->cars;
        return dd($cars);
    }

}
