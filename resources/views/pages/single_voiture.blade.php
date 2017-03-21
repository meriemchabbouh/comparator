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
    
    <!-- CSS -->
    <link href="{{ asset('css/slider-pro.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/date_time_picker.css') }}" rel="stylesheet">
    
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

    <section class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/single_tour_bg_1.jpg') }}" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <h1>Arc de Triomphe</h1>
                    <span>Champ de Mars, 5 Avenue Anatole, 75007 Paris.</span>
                    <span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small></span>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div id="price_single_main">
                        from/per person <span><sup>$</sup>52</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section><!-- End section -->

    <div id="position">
            <div class="container">
                        <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Category</a></li>
                        <li>Page active</li>
                        </ul>
            </div>
    </div><!-- End Position -->

    
     <div class="collapse" id="collapseMap">
        <div id="map" class="map"></div>
    </div><!-- End Map -->
    
    <div class="container margin_60">
    <div class="row">
        <div class="col-md-8" id="single_tour_desc">
            <div id="single_tour_feat">
                <ul>
                    <li><i class="icon_set_1_icon-4"></i>Museum</li>
                    <li><i class="icon_set_1_icon-83"></i>3 Hours</li>
                    <li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                    <li><i class="icon_set_1_icon-82"></i>144 Likes</li>
                    <li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                    <li><i class="icon_set_1_icon-97"></i>Audio guide</li>
                    <li><i class="icon_set_1_icon-29"></i>Tour guide</li>
                </ul>
            </div>
            
            <p class="visible-sm visible-xs"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a></p><!-- Map button for tablets/mobiles -->
            
            <div id="Img_carousel" class="slider-pro">
                <div class="sp-slides">
                
                    <div class="sp-slide">
                        <img alt="Image" class="sp-image" src="{{ asset('css/images/blank.gif') }}" 
                        data-src="{{ asset('img/slider_single_tour/1_medium.jpg') }}" 
                        data-small="img/slider_single_tour/1_small.jpg" 
                        data-medium="img/slider_single_tour/1_medium.jpg" 
                        data-large="img/slider_single_tour/1_large.jpg" 
                        data-retina="img/slider_single_tour/1_large.jpg">
                    </div>
                    <div class="sp-slide">
                        <img alt="Image" class="sp-image" src="{{ asset('css/images/blank.gif') }}" 
                        data-src="{{ asset('img/slider_single_tour/2_medium.jpg') }}" 
                        data-small="img/slider_single_tour/2_small.jpg" 
                        data-medium="img/slider_single_tour/2_medium.jpg" 
                        data-large="img/slider_single_tour/2_large.jpg" 
                        data-retina="img/slider_single_tour/2_large.jpg">
                        <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="40" data-show-transition="left">
                        Lorem ipsum dolor sit amet </h3>
                        <p class="sp-layer sp-white sp-padding" data-horizontal="40" data-vertical="100" data-show-transition="left" data-show-delay="200">
                             consectetur adipisicing elit
                        </p>
                        <p class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="160" data-width="350" data-show-transition="left" data-show-delay="400">
                             sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="Image" class="sp-image" src="{{ asset('css/images/blank.gif') }}" 
                        data-src="{{ asset('img/slider_single_tour/3_medium.jpg') }}" 
                        data-small="img/slider_single_tour/3_small.jpg" 
                        data-medium="img/slider_single_tour/3_medium.jpg" 
                        data-large="img/slider_single_tour/3_large.jpg" 
                        data-retina="img/slider_single_tour/3_large.jpg">
                        <p class="sp-layer sp-white sp-padding" data-position="centerCenter" data-vertical="-50" data-show-transition="right" data-show-delay="500">
                             Lorem ipsum dolor sit amet
                        </p>
                        <p class="sp-layer sp-black sp-padding" data-position="centerCenter" data-vertical="50" data-show-transition="left" data-show-delay="700">
                             consectetur adipisicing elit
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="Image" class="sp-image" src="{{ asset('css/images/blank.gif') }}" 
                        data-src="{{ asset('img/slider_single_tour/4_medium.jpg') }}" 
                        data-small="img/slider_single_tour/4_small.jpg" 
                        data-medium="img/slider_single_tour/4_medium.jpg" 
                        data-large="img/slider_single_tour/4_large.jpg" 
                        data-retina="img/slider_single_tour/4_large.jpg">
                        <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-vertical="0" data-width="100%" data-show-transition="up">
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="Image" class="sp-image" src="{{ asset('css/images/blank.gif') }}" 
                        data-src="{{ asset('img/slider_single_tour/5_medium.jpg') }}" 
                        data-small="img/slider_single_tour/5_small.jpg" 
                        data-medium="img/slider_single_tour/5_medium.jpg" 
                        data-large="img/slider_single_tour/5_large.jpg" 
                        data-retina="img/slider_single_tour/5_large.jpg">
                        <p class="sp-layer sp-white sp-padding" data-vertical="5%" data-horizontal="5%" data-width="90%" data-show-transition="down" data-show-delay="400">
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="Image" class="sp-image" src="{{ asset('css/images/blank.gif') }}" 
                        data-src="{{ asset('img/slider_single_tour/6_medium.jpg') }}" 
                        data-small="img/slider_single_tour/6_small.jpg" 
                        data-medium="img/slider_single_tour/6_medium.jpg" 
                        data-large="img/slider_single_tour/6_large.jpg" 
                        data-retina="img/slider_single_tour/6_large.jpg">
                        <p class="sp-layer sp-white sp-padding" data-horizontal="10" data-vertical="10" data-width="300">
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="Image" class="sp-image" src="{{ asset('css/images/blank.gif') }}" 
                        data-src="{{ asset('img/slider_single_tour/7_medium.jpg') }}" 
                        data-small="img/slider_single_tour/7_small.jpg" 
                        data-medium="img/slider_single_tour/7_medium.jpg" 
                        data-large="img/slider_single_tour/7_large.jpg" 
                        data-retina="img/slider_single_tour/7_large.jpg">
                        <p class="sp-layer sp-black sp-padding" data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" data-show-transition="up" data-show-delay="400">
                             Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="Image" class="sp-image" src="{{ asset('css/images/blank.gif') }}" 
                        data-src="{{ asset('img/slider_single_tour/8_medium.jpg') }}" 
                        data-small="img/slider_single_tour/8_small.jpg" 
                        data-medium="img/slider_single_tour/8_medium.jpg" 
                        data-large="img/slider_single_tour/8_large.jpg" 
                        data-retina="img/slider_single_tour/8_large.jpg">
                        <p class="sp-layer sp-black sp-padding" data-horizontal="50" data-vertical="50" data-show-transition="down" data-show-delay="500">
                             Lorem ipsum dolor sit amet
                        </p>
                        <p class="sp-layer sp-white sp-padding" data-horizontal="50" data-vertical="100" data-show-transition="up" data-show-delay="500">
                             consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    
                    <div class="sp-slide">
                        <img alt="Image" class="sp-image" src="{{ asset('css/images/blank.gif') }}" 
                        data-src="{{ asset('img/slider_single_tour/9_medium.jpg') }}" 
                        data-small="img/slider_single_tour/9_small.jpg" 
                        data-medium="img/slider_single_tour/9_medium.jpg" 
                        data-large="img/slider_single_tour/9_large.jpg" 
                        data-retina="img/slider_single_tour/9_large.jpg">
                    </div>
                </div>
                <div class="sp-thumbnails">
                    <img alt="Image" class="sp-thumbnail" src="{{ asset('img/slider_single_tour/1_medium.jpg') }}">
                    <img alt="Image" class="sp-thumbnail" src="{{ asset('img/slider_single_tour/2_medium.jpg') }}">
                    <img alt="Image" class="sp-thumbnail" src="{{ asset('img/slider_single_tour/3_medium.jpg') }}">
                    <img alt="Image" class="sp-thumbnail" src="{{ asset('img/slider_single_tour/4_medium.jpg') }}">
                    <img alt="Image" class="sp-thumbnail" src="{{ asset('img/slider_single_tour/5_medium.jpg') }}">
                    <img alt="Image" class="sp-thumbnail" src="{{ asset('img/slider_single_tour/6_medium.jpg') }}">
                    <img alt="Image" class="sp-thumbnail" src="{{ asset('img/slider_single_tour/7_medium.jpg') }}">
                    <img alt="Image" class="sp-thumbnail" src="{{ asset('img/slider_single_tour/8_medium.jpg') }}">
                    <img alt="Image" class="sp-thumbnail" src="{{ asset('img/slider_single_tour/9_medium.jpg') }}">
                </div>
            </div>
            
            <hr>
            
            <div class="row">
                <div class="col-md-3">
                    <h3>Description</h3>
                </div>
                <div class="col-md-9">
                    <h4>Paris in love</h4>
                    <p>
                        Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi. Eu ponderum mediocrem has, vitae adolescens in pro. Mea liber ridens inermis ei, mei legendos vulputate an, labitur tibique te qui.
                    </p>
                    <h4>What's include</h4>
                    <p>
                        Lorem ipsum dolor sit amet, at omnes deseruisse pri. Quo aeterno legimus insolens ad. Sit cu detraxit constituam, an mel iudico constituto efficiendi.
                    </p>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <ul class="list_ok">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>No scripta electram necessitatibus sit</li>
                                <li>Quidam percipitur instructior an eum</li>
                                <li>Ut est saepe munere ceteros</li>
                                <li>No scripta electram necessitatibus sit</li>
                                <li>Quidam percipitur instructior an eum</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <ul class="list_ok">
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>No scripta electram necessitatibus sit</li>
                                <li>Quidam percipitur instructior an eum</li>
                                <li>No scripta electram necessitatibus sit</li>
                            </ul>
                        </div>
                    </div>
                    <!-- End row  -->
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <h3>Schedule</h3>
                </div>
                <div class="col-md-9">
                
                    <div class=" table-responsive">
                        <table class="table table-striped">
                        <thead>
                        <tr>
                            <th colspan="2">
                                 1st March to 31st October
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                Monday
                            </td>
                            <td>
                                10.00 - 17.30
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Tuesday
                            </td>
                            <td>
                                09.00 - 17.30
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Wednesday
                            </td>
                            <td>
                                09.00 - 17.30
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Thursday
                            </td>
                            <td>
                                <span class="label label-danger">Closed</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Friday
                            </td>
                            <td>
                                09.00 - 17.30
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Saturday
                            </td>
                            <td>
                                09.00 - 17.30
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Sunday
                            </td>
                            <td>
                                10.00 - 17.30
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong><em>Last Admission</em></strong>
                            </td>
                            <td>
                                <strong>17.00</strong>
                            </td>
                        </tr>
                        </tbody>
                        </table>
                    </div>
                    
                    <div class=" table-responsive">
                        <table class="table table-striped">
                        <thead>
                        <tr>
                            <th colspan="2">
                                 1st November to 28th February
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                Monday
                            </td>
                            <td>
                                10.00 - 17.30
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Tuesday
                            </td>
                            <td>
                                09.00 - 17.30
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Wednesday
                            </td>
                            <td>
                                09.00 - 17.30
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Thursday
                            </td>
                            <td>
                                <span class="label label-danger">Closed</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Friday
                            </td>
                            <td>
                                09.00 - 17.30
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Saturday
                            </td>
                            <td>
                                09.00 - 17.30
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Sunday
                            </td>
                            <td>
                                10.00 - 17.30
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong><em>Last Admission</em></strong>
                            </td>
                            <td>
                                <strong>17.00</strong>
                            </td>
                        </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
				<div class="col-md-3">
					<h3>Reviews </h3>
                    <a href="#" class="btn_1 add_bottom_30" data-toggle="modal" data-target="#myReview">Leave a review</a>
				</div>
				<div class="col-md-9">
                	<div id="general_rating">11 Reviews 
                    <div class="rating">
							<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
						</div>
                    </div><!-- End general_rating -->
                    <div class="row" id="rating_summary">
                    	<div class="col-md-6">
                        	<ul>
                            	<li>Position
                                    <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                    </div>
                                </li>
                                <li>Tourist guide
                                <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                        	<ul>
                            	<li>Price
                                <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
                                    </div>
                                </li>
                                <li>Quality
                                <div class="rating">
                                            <i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- End row -->
                    <hr>
					<div class="review_strip_single">
						<img src="{{ asset('img/avatar1.jpg') }}" alt="Image" class="img-circle">
						<small> - 10 March 2015 -</small>
						<h4>Jhon Doe</h4>
						<p>
							 "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
						</p>
						<div class="rating">
							<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
						</div>
					</div><!-- End review strip -->
                    
					<div class="review_strip_single">
						<img src="{{ asset('img/avatar3.jpg') }}" alt="Image" class="img-circle">
						<small> - 10 March 2015 -</small>
						<h4>Jhon Doe</h4>
						<p>
							 "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
						</p>
						<div class="rating">
							<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
						</div>
					</div><!-- End review strip -->
                    
					<div class="review_strip_single last">
						<img src="{{ asset('img/avatar2.jpg') }}" alt="Image" class="img-circle">
						<small> - 10 March 2015 -</small>
						<h4>Jhon Doe</h4>
						<p>
							 "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus."
						</p>
						<div class="rating">
							<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
						</div>
					</div><!-- End review strip -->
				</div>
			</div>
        </div><!--End  single_tour_desc-->
        
        <aside class="col-md-4">
        <p class="hidden-sm hidden-xs">
            <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
        </p>
        <div class="box_style_1 expose">
            <h3 class="inner">- Booking -</h3>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label><i class="icon-calendar-7"></i> Select a date</label>
                        <input class="date-pick form-control" data-date-format="M d, D" type="text">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label><i class=" icon-clock"></i> Time</label>
                        <input class="time-pick form-control" value="12:00 AM" type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Adults</label>
                        <div class="numbers-row">
                            <input type="text" value="1" id="adults" class="qty2 form-control" name="quantity">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="form-group">
                        <label>Children</label>
                        <div class="numbers-row">
                            <input type="text" value="0" id="children" class="qty2 form-control" name="quantity">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <table class="table table_summary">
            <tbody>
            <tr>
                <td>
                    Adults
                </td>
                <td class="text-right">
                    2
                </td>
            </tr>
            <tr>
                <td>
                    Children
                </td>
                <td class="text-right">
                    0
                </td>
            </tr>
            <tr>
                <td>
                    Total amount
                </td>
                <td class="text-right">
                    3x $52
                </td>
            </tr>
            <tr class="total">
                <td>
                    Total cost
                </td>
                <td class="text-right">
                    $154
                </td>
            </tr>
            </tbody>
            </table>
            <a class="btn_full" href="{{URL::asset('/cart_voiture')}}">Book now</a>
            <a class="btn_full_outline" href="#"><i class=" icon-heart"></i> Add to whislist</a>
        </div><!--/box_style_1 -->
        
        <div class="box_style_4">
            <i class="icon_set_1_icon-90"></i>
            <h4><span>Book</span> by phone</h4>
            <a href="tel://004542344599" class="phone">+45 423 445 99</a>
            <small>Monday to Friday 9.00am - 7.30pm</small>
        </div>
        
        </aside>
    </div><!--End row -->
    </div><!--End container -->
 
 <!-- footer -->
  @include('includes.footer')
 <!-- End footer -->

<div id="toTop"></div><!-- Back to top button --> 
<div id="overlay"></div><!-- Mask on input focus -->  

<!-- Modal Review -->
<div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myReviewLabel">Write your review</h4>
			</div>
			<div class="modal-body">
				<div id="message-review">
				</div>
				<form method="post" action="assets/review_tour.php" name="review_tour" id="review_tour">
                <input name="tour_name" id="tour_name" type="hidden" value="Paris Arch de Triomphe Tour">	
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input name="name_review" id="name_review" type="text" placeholder="Your name" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input name="lastname_review" id="lastname_review" type="text" placeholder="Your last name" class="form-control">
							</div>
						</div>
					</div>
					<!-- End row -->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input name="email_review" id="email_review" type="email" placeholder="Your email" class="form-control">
							</div>
						</div>
					</div>
					<!-- End row -->
					<hr>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Position</label>
								<select class="form-control" name="position_review" id="position_review">
									<option value="">Please review</option>
									<option value="Low">Low</option>
									<option value="Sufficient">Sufficient</option>
									<option value="Good">Good</option>
									<option value="Excellent">Excellent</option>
									<option value="Superb">Super</option>
									<option value="Not rated">I don't know</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Tourist guide</label>
								<select class="form-control" name="guide_review" id="guide_review">
									<option value="">Please review</option>
									<option value="Low">Low</option>
									<option value="Sufficient">Sufficient</option>
									<option value="Good">Good</option>
									<option value="Excellent">Excellent</option>
									<option value="Superb">Super</option>
									<option value="Not rated">I don't know</option>
								</select>
							</div>
						</div>
					</div>
					<!-- End row -->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Price</label>
								<select class="form-control" name="price_review" id="price_review">
									<option value="">Please review</option>
									<option value="Low">Low</option>
									<option value="Sufficient">Sufficient</option>
									<option value="Good">Good</option>
									<option value="Excellent">Excellent</option>
									<option value="Superb">Super</option>
									<option value="Not rated">I don't know</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Quality</label>
								<select class="form-control" name="quality_review" id="quality_review">
									<option value="">Please review</option>
									<option value="Low">Low</option>
									<option value="Sufficient">Sufficient</option>
									<option value="Good">Good</option>
									<option value="Excellent">Excellent</option>
									<option value="Superb">Super</option>
									<option value="Not rated">I don't know</option>
								</select>
							</div>
						</div>
					</div>
					<!-- End row -->
					<div class="form-group">
						<textarea name="review_text" id="review_text" class="form-control" style="height:100px" placeholder="Write your review"></textarea>
					</div>
					<div class="form-group">
						<input type="text" id="verify_review" class=" form-control" placeholder="Are you human? 3 + 1 =">
					</div>
					<input type="submit" value="Submit" class="btn_1" id="submit-review">
				</form>
			</div>
		</div>
	</div>
</div><!-- End modal review -->

 <!-- Common scripts -->
@include('layouts.scripts')

 <!-- Specific scripts -->
<script src="{{ asset('js/icheck.js') }}"></script>
<script>
$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 </script>
 <!-- Date and time pickers -->
<script src="{{ asset('js/jquery.sliderPro.min.js') }}"></script>
<script type="text/javascript">
	$( document ).ready(function( $ ) {
		$( '#Img_carousel' ).sliderPro({
			width: 960,
			height: 500,
			fade: true,
			arrows: true,
			buttons: false,
			fullScreen: false,
			smallSize: 500,
			startSlide: 0,
			mediumSize: 1000,
			largeSize: 3000,
			thumbnailArrows: true,
			autoplay: false
		});
	});
</script>

 <!-- Date and time pickers -->
 <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
 <script src="{{ asset('js/bootstrap-timepicker.js') }}"></script>
 <script>
  $('input.date-pick').datepicker('setDate', 'today');
  $('input.time-pick').timepicker({
    minuteStep: 15,
    showInpunts: false
})
  </script>
  
<!--Review modal validation -->
<script src="{{ asset('assets/validate.js') }}"></script>

 <!-- Map -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="{{ asset('js/map.js') }}"></script>
<script src="{{ asset('js/infobox.js') }}"></script>
  </body>
</html>