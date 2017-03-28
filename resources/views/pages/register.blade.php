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
            	<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                	<div id="login">
                    		<div class="text-center"><img src="{{ asset('img/logo_sticky.png') }}" alt="Image" data-retina="true" ></div>
                            <hr>
                           <form action="{{URL::route('post-register')}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group {{ ($errors->has('email')) ? 'has-error has-feedback'  :''}}">
                                	<label>Email</label>
                                    <input type="text" name="email" class=" form-control" placeholder="Email" value="{{ old('email') }}">
                                    @if($errors->has('email'))
                                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                        <label id="email-error" class="error"
                                               for="email-error">{{ $errors->first('email') }}</label>
                                    @endif
                                </div>
                                <div class="form-group">
                                	<label>Password</label>
                                    <input type="password" name="password" class=" form-control" id="password1" placeholder="Password" required >
                                </div>
                                <div class="form-group">
                                	<label>Confirm password</label>
                                    <input type="password" name="confirm" class=" form-control" id="password2" placeholder="Confirm password">
                                </div>

                                 <div class="form-group">
                                    <input type="radio" name="type" value="1" checked > prestataire  
                                    <input type="radio" name="type" value="2" >client
                                </div>
                                                                   
                                <div id="pass-info" class="clearfix"></div>                                
                                <button type="submit" class="btn_full">Create an account</button>

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