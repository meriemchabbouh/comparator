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
                           <form  method="post" action="{{URL::route('post-editprovider')}}">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Nom</label>
                                        <input type="text" class=" form-control" name="name" value="{{$provider->name}}" placeholder="Nom">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                	   <label>Adresse</label>
                                       <input type="text" class=" form-control" name="address" value="{{$provider->address}}" placeholder="Adresse">
                                    </div>
                                </div>
                            </div>    

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Code Postal</label>
                                        <input type="text" class=" form-control" value="{{$provider->postal_code}}" name="postal_code" placeholder="Code Postal">
                                    </div>
                                </div>  
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Email public</label>
                                        <input type="email" class=" form-control" value="{{$provider->public_email}}" name="public_email" placeholder="Email public">
                                    </div>
                                </div>  
                            </div>    
                            
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Telephone</label>
                                        <input type="text" class=" form-control" name="phone" value="{{$provider->phone}}" placeholder="Telephone">
                                    </div>
                                </div>  
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Lien du site web</label>
                                        <input type="text" class=" form-control" value="{{$provider->link_website}}" name="link_website" placeholder="Lien du site web">
                                    </div>
                                </div>
                            </div>  
                            
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Lien Facebook</label>
                                        <input type="text" class=" form-control" value="{{$provider->link_fb}}" name="link_fb"  placeholder="Lien Facebook">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                     <div class="form-group">
                                    <label>Lien Instagram</label>
                                    <input type="text" class=" form-control" value="{{$provider->link_instagram}}"  name="link_instagram" placeholder="Lien Instagram">
                                </div>
                              </div>  
                            </div>    
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea rows="5" id="message_contact" name="description" class="form-control" placeholder="Votre description" style="height:200px;">
                                         {{$provider->description}}
                                    </textarea>
                                </div>
                              </div>  
                            </div>    

                                <div id="pass-info" class="clearfix"></div>
                                <button type="submit" class="btn_full">Sauvegarder</button>

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

  </body>
</html>
