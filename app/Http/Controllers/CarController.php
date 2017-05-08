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
use Auth;
use App\User;

class CarController extends Controller
{
    public function getCars()
    {
        $cars = Car::where('id', '!=', 1)->paginate(10);

        return view('pages.cars')->with([
            'cars' => $cars
        ]);
    }


    public function getCarsProvider($id_provider)
    {
        $cars = Car::where('provider_id', $id_provider)->paginate(1);
        return view('pages.cars_provider')->with(['cars' => $cars]);
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
        //return redirect()->route('get-cars-provider');
        //return view('pages.cars_provider')->with(['cars' => $cars]);
        return redirect()->back();
    }

// add car + images
    public function getAddcar()
    {   $brands  =Brand::all();
        $models = Car_model::all();
        $types = Type_car::all();
        $cities = City::all();

        $governorates = Governorate::all();
        return view('pages.addcar', ['brands' => $brands, 'models'=>$models , 'types'=>$types , 'cities'=>$cities , 'governorates'=>$governorates ]);
    }

    public function addCarAndImages(Request $request)
    {  
        $air_conditioner = false;
        if ($request->has('air_conditioner')) {
            $air_conditioner = true;
        }

        $gps = false;
        if ($request->has('gps')) {
            $gps = true;
        }

        $airbag = false;
        if ($request->has('airbag')) {
            $airbag = true;
        }

        $abs = false;
        if ($request->has('abs')) {
            $abs = true;
        }

        // TODO les champs radio manwasikech copier coller :p

        $car                       = new Car;

        $car->air_conditioner      = $air_conditioner;
        $car->number_of_seats      = $request->input('number_of_seats');
        $car->number_of_doors      = $request->input('number_of_doors');
        $car->consumption          = $request->input('consumption');
        $car->gps                  = $gps;
        $car->transmission         = $request->input('transmission');
        $car->airbag               = $airbag;
        $car->abs                  = $abs;
        $car->year                 = $request->input('year');
        $car->exteriror_color      = $request->input('exteriror_color');
        $car->interior_color       = $request->input('interior_color');
        $car->fuel                 = $request->input('fuel');
        $car->engine               = $request->input('engine');
        $car->car_model_id         = $request->input('car_model_id');       
        $car->city_id              = $request->input('city_id');
        $car->type_car_id          = $request->input('type_car_id');
        $user_id=Auth::user()->id;
        $provider = User::find($user_id)->provider;
        $car->provider_id          = $provider->id;
         $car->save();

        foreach ($request->photos as $photo) {
            $name = str_random(20);
            $extension = $photo->getClientOriginalExtension();

            $fileName = $name . '.' . $extension;
            $photo->move(base_path(). '/public/uploads/', $fileName);

            $photo_car = new Photo_car();
            $photo_car->photo = $fileName;
            $photo_car->car_id = $car->id;
            $photo_car->save();
        }
        // todo cover copier coller ama thabet fel esemi
        // fel vue na7ki governorat et ville
        foreach ($request->covers as $cover) {
            $name = str_random(20);
            $extension = $cover->getClientOriginalExtension();

            $fileName = $name . '.' . $extension;
            $cover->move(base_path(). '/public/uploads/', $fileName);

            $cover_car = new Cover_car();
            $cover_car->cover = $fileName;
            $cover_car->car_id = $car->id;
            $cover_car->save();
        }
    
        return 'saved';
    }

    public function getEditCar($id)
    {
       $car =Car::find($id);
       $brands  =Brand::all();
        $models = Car_model::all();
        $types = Type_car::all();
        $cities = City::all();
        $governorates = Governorate::all();
        return view('pages.editcar',  ['brands' => $brands, 'models'=>$models , 'types'=>$types , 'cities'=>$cities , 'governorates'=>$governorates ]);
    }


    public function postEditCar(Request $request)
    {
        $car                       = new Car;
        $air_conditioner = false;
        if ($request->has('air_conditioner')) {
            $air_conditioner = true;
        }

        dd($air_conditioner);

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
        $user_id=Auth::user()->id;
        $provider = User::find($user_id)->provider;
        $car->provider_id          = $provider->id;

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
