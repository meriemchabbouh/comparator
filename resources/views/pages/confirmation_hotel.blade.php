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
    
    <!-- Radio and check inputs -->
    <link href="css/skins/square/grey.css" rel="stylesheet">
	
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

    
    <section id="hero_2">
	<div class="intro_title animated fadeInDown">
           <h1>Place your order</h1>
            <div class="bs-wizard">
  			
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Your cart</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="cart_hotel.html" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="payment_hotel.html" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step complete">
                  <div class="text-center bs-wizard-stepnum">Finish!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#" class="bs-wizard-dot"></a>
                </div>  
                   
		</div>  <!-- End bs-wizard --> 
    </div>   <!-- End intro-title --> 
</section><!-- End Section hero_2 -->
    
    <div id="position">
    	<div class="container">
                	<ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Category</a></li>
                    <li>Page active</li>
                    </ul>
        </div>
    </div><!-- End position -->
    
    <div class="container margin_60">
	<div class="row">
		<div class="col-md-8 add_bottom_15">
        
			<div class="form_title">
				<h3><strong><i class="icon-ok"></i></strong>Thank you!</h3>
				<p>
					Mussum ipsum cacilds, vidis litro abertis.
				</p>
			</div>
			<div class="step">
				<p>
					Lorem ipsum dolor sit amet, nostrud nominati vis ex, essent conceptam eam ad. Cu etiam comprehensam nec. Cibo delicata mei an, eum porro legere no. Te usu decore omnium, quem brute vis at, ius esse officiis legendos cu. Dicunt voluptatum at cum. Vel et facete equidem deterruisset, mei graeco cetero labores et. Accusamus inciderint eu mea.
				</p>
			</div><!--End step -->
            
			<div class="form_title">
				<h3><strong><i class="icon-tag-1"></i></strong>Booking summary</h3>
				<p>
					Mussum ipsum cacilds, vidis litro abertis.
				</p>
			</div>
			<div class="step">
				<table class="table confirm">
				<tbody>
				<tr>
					<td>
						<strong>Name</strong>
					</td>
					<td>
					  Jhon Doe
					</td>
				</tr>
				<tr>
					<td>
						<strong>Check in</strong>
					</td>
					<td>
						10 April 2015</td>
				</tr>
				<tr>
					<td><strong>Check out</strong></td>
					<td>
						12 April 2015<br>
				   </td>
				</tr>
                 <tr>
					<td><strong>rooms</strong></td>
					<td>1 double room</td>
				</tr>
                <tr>
					<td><strong>Nights</strong></td>
					<td>2</td>
				</tr>
                <tr>
					<td><strong>Adults</strong></td>
					<td>2</td>
				</tr>
                  <tr>
					<td><strong>Childs</strong></td>
					<td>0</td>
				</tr>
				<tr>
					<td>
						<strong>Payment type</strong>
					</td>
					<td>
						Credit card
					</td>
				</tr>
                 <tr >
                  <td>
                    <strong>TOTAL COST</strong>
                    </td>
                  <td >
                    $154
                    </td>
                </tr>
				</tbody>
				</table>
			</div><!--End step -->
		</div><!--End col-md-8 -->
        
		<aside class="col-md-4">
		<div class="box_style_1">
			<h3 class="inner">Thank you!</h3>
			<p>
				Nihil inimicus ex nam, in ipsum dignissim duo. Tale principes interpretaris vim ei, has posidonium definitiones ut. Duis harum fuisset ut his, duo an dolor epicuri appareat.
			</p>
			<hr>
			<a class="btn_full_outline" href="{{URL::asset('/invoice')}}" target="_blank">View your invoice</a>
		</div>
		<div class="box_style_4">
			<i class="icon_set_1_icon-89"></i>
			<h4>Have <span>questions?</span></h4>
			<a href="tel://004542344599" class="phone">+45 423 445 99</a>
			<small>Monday to Friday 9.00am - 7.30pm</small>
		</div>
		</aside>
        
	</div><!--End row -->
</div><!--End container -->

<!--footer -->
@include('includes.footer')
<!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<div id="toTop"></div>
<!-- Jquery -->
@include('layouts.scripts')

<script src="{{ asset('js/icheck.js') }}"></script>
<script>  
$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 </script>





  </body>
</html>