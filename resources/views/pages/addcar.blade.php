<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="Citytours - Premium site template for city tours agencies, transfers and tickets.">
    <meta name="author" content="Ansonika">
    <title>CITY TOURS - City tours and travel site template by Ansonika</title>
    
    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- CSS -->
    @include('layouts.css')
    
    
    
    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
        
</head>
<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->

     <!-- Header================================================== -->
     @include('includes.header')
     <!-- End Header -->
    
    <section id="hero" class="login">
    	<div class="container">
         
        	<div class="row">
            	<div class="col-md-10 col-sm-12 col-md-offset-1">
                	<div id="login">
                    	<div class="text-center"><img src="{{ asset('img/logo_sticky.png') }}" alt="Image" data-retina="true" ></div>
                        <hr>
                        <form  method="post" action="{{URL::route('post-car-and-img')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Air conditioner</label>
                                        <select class="ddslick" name="air_conditioner">
                                            <option value="" disabled selected hidden style="color:blue;" >Air conditioner</option>
                                            <option value="0" selected>Non</option>
                                            <option value="1" >Oui</option>
                                        </select>
                                
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                	    <label>Number of seats</label>
                                        <select class="ddslick" name="number_of_seats">
                                            <option value="" disabled selected hidden style="color:blue;" >Number of seats</option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                            <option value="4"> 4 </option>
                                            <option value="5"> 5 </option>
                                            <option value="6"> 6 </option>
                                            <option value="7"> 7 </option>
                                        </select>
                                    </div>
                                </div>
                            </div>    

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Number of doors</label>
                                        <select class="ddslick" name="number_of_doors">
                                            <option value="" disabled selected hidden >Number of doors</option>
                                            <option value="1"> 2 </option>
                                            <option value="2"> 3 </option>
                                            <option value="3"> 4 </option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Number of passengers</label>
                                        <select class="ddslick" name="number_of_seats">
                                            <option value="" disabled selected hidden >Number of seats</option>
                                            <option value="1"> 1 </option>
                                            <option value="2"> 2 </option>
                                            <option value="3"> 3 </option>
                                            <option value="4"> 4 </option>
                                            <option value="5"> 5 </option>
                                            <option value="6"> 6 </option>
                                            <option value="7"> 7 </option>
                                        </select>
                                    </div>
                                </div>  
                            </div>    
                            
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Consumption</label>
                                        <input type="text" class=" form-control" name="consumption" value="" placeholder="Consumption">
                                    </div>
                                </div>  
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>GPS</label>
                                        <select class="ddslick" name="gps">
                                            <option value="" disabled selected hidden style="color:blue;" >GPS</option>
                                            <option value="0" selected>Non</option>
                                            <option value="1" >Oui</option>
                                        </select>
                                    </div>
                                </div>
                            </div>  
                            
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Transmission</label>
                                        <select class="ddslick" name="transmission">
                                            <option value="" disabled selected hidden style="color:blue;">Transmission</option>
                                            <option value="0" selected>Manuelle</option>
                                            <option value="1" >Automatique</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                     <div class="form-group">
                                    <label>Airbag</label>
                                    <select class="ddslick" name="airbag">
                                        <option value="" disabled selected hidden style="color:blue;">Airbag</option>
                                        <option value="0" selected>Non</option>
                                        <option value="1" >Oui</option>
                                    </select>
                                </div>
                              </div>  
                            </div>        

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>ABS</label>
                                        <select class="ddslick" name="abs">
                                            <option value="" disabled selected hidden style="color:blue;">ABS</option>
                                            <option value="0" selected>Non</option>
                                            <option value="1" >Oui</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Year</label>
                                        <input type="date" class=" form-control" name="year" value="" placeholder="12/12/2012">
                                    </div>
                                </div>  
                            </div>  

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Exterior color</label>
                                        <input type="text" class=" form-control" value="" name="exteriror_color"  placeholder="Exterior color">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                     <div class="form-group">
                                    <label>Interior color</label>
                                    <input type="text" class=" form-control" value=""  name="interior_color" placeholder="Interior color">
                                </div>
                              </div>  
                            </div>  

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Fuel</label>
                                        <select class="ddslick" name="fuel">
                                            <option value="" disabled selected hidden >Fuel</option>
                                            <option value="1">Essence</option>
                                            <option value="2">Gazole</option>
                                            <option value="3">Sans Plomb</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                     <div class="form-group">
                                    <label>Engine</label>
                                    <input type="text" class=" form-control" value=""  name="engine" placeholder="Engine">
                                </div>
                              </div>  
                            </div>  

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Marque</label>
                                      <select class="ddslick" name="brand_id">
                                            <option value="" disabled selected hidden >marque</option>
                                            @foreach ( $brands as $brand)

                                            <option value="{{$brand->id }} "> {{$brand->brand }} </option>
                                            @endforeach    
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Model</label>
                                        <select class="ddslick" name="car_model_id">
                                            <option value="" disabled selected hidden >model</option>
                                            @foreach ( $models as $model)

                                            <option value="{{$model->id }} "> {{$model->model}} </option>
                                            @endforeach    
                                        </select>

                                        </select>
                                    </div>
                                </div>  
                            </div>  

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Type</label>
                                         <select class="ddslick" name="type_car_id">
                                            <option value="" disabled selected hidden >type</option>
                                            @foreach ( $types as $type)

                                            <option value="{{$type->id }} "> {{$type->type }} </option>
                                            @endforeach    
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>City</label>
                                      <select class="ddslick" name="city_id">
                                            <option value="" disabled selected hidden >city</option>
                                            @foreach ( $cities as $city)

                                            <option value="{{$city->id}} "> {{$city->city }} </option>
                                            @endforeach    
                                        </select>
                                    </div>
                                </div>  
                            </div>  

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Governorate</label>
                                         <select class="ddslick" name="governorate_id">
                                            <option value="" disabled selected hidden >governorate</option>
                                            @foreach ( $governorates as $governorate)

                                            <option value="{{$governorate->id }} "> {{$governorate->name }} </option>
                                            @endforeach    
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class=" form-control" value=""  name="" placeholder="City">
                                    </div>
                                </div>  
                            </div> 

                                <div id="pass-info" class="clearfix"></div>
                                <button type="submit" class="btn_full">Ajouter Voiture</button>

                        </form>
                    </div>
                </div>
            </div>   
        </div>
    </section>

<!--footer -->
@include('includes.footer')
<!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

 <!-- Common scripts -->
@include('layouts.scripts')

 <!-- Specific scripts -->
<script src="{{ asset('js/pw_strenght.js') }}"></script>
<script src="{{ asset('js/jquery.ddslick.js') }}"></script>
<script>
   $("select.ddslick").each(function(){
            $(this).ddslick({
                showSelectedHTML: true 
            });
        });
</script>

  </body>
</html>
