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
    <link href="{{ asset('css/skins/square/grey.css') }}" rel="stylesheet">
    
    <!-- Range slider -->
    <link href="{{ asset('css/ion.rangeSlider.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet">
    
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

    
<section class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('img/hotels_bg.jpg') }}" data-natural-width="1400" data-natural-height="470">
    <div class="parallax-content-1">
        <div class="animated fadeInDown">
        <h1>Paris Hotels</h1>
        <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
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
    </div><!-- Position -->
    
<div class="collapse" id="collapseMap">
    <div id="map" class="map"></div>
</div><!-- End Map -->

<div  class="container margin_60">
            
        <div class="row">
        <aside class="col-lg-3 col-md-3">
            <p>
                <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
            </p>
   
        <div id="filters_col">
            <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Filters <i class="icon-plus-1 pull-right"></i></a>
            <div class="collapse" id="collapseFilters">
                <div class="filter_type">
                    <h6>Price</h6>
                    <input type="text" id="range" name="range" value="">
                </div>
                    <div class="filter_type">
                    <h6>Star Category</h6>
                    <ul>
                        <li><label><input type="checkbox"><span class="rating">
                        <i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i>
                        </span>(15)</label></li>
                        <li><label><input type="checkbox"><span class="rating">
                        <i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i>
                        </span>(45)</label></li>
                        <li><label><input type="checkbox"><span class="rating">
                        <i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
                        </span>(35)</label></li>
                        <li><label><input type="checkbox"><span class="rating">
                        <i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
                        </span>(25)</label></li>
                        <li><label><input type="checkbox"><span class="rating">
                        <i class="icon_set_1_icon-81 voted"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i><i class="icon_set_1_icon-81"></i>
                        </span>(15)</label></li>
                    </ul>
                </div>
                <div class="filter_type">
                    <h6>Review Score</h6>
                    <ul>
                        <li><label><input type="checkbox">Superb: 9+ (77)</label></li>
                        <li><label><input type="checkbox">Very good: 8+ (552)</label></li>
                        <li><label><input type="checkbox">Good: 7+ (909)</label></li>
                        <li><label><input type="checkbox">Pleasant: 6+ (1196)</label></li>
                        <li><label><input type="checkbox">No rating (198)</label></li>
                    </ul>
                </div>
                <div class="filter_type">
                    <h6>Facility</h6>
                    <ul>
                        <li><label><input type="checkbox">Pet allowed</label></li>
                        <li><label><input type="checkbox">Wifi</label></li>
                        <li><label><input type="checkbox">Spa</label></li>
                        <li><label><input type="checkbox">Restaurant</label></li>
                        <li><label><input type="checkbox">Pool</label></li>
                        <li><label><input type="checkbox">Parking</label></li>
                        <li><label><input type="checkbox">Fitness center</label></li>
                    </ul>
                </div>
                <div class="filter_type">
                    <h6>District</h6>
                    <ul>
                        <li><label><input type="checkbox">Paris Centre</label></li>
                        <li><label><input type="checkbox">La Defance</label></li>
                        <li><label><input type="checkbox">La Marais</label></li>
                        <li><label><input type="checkbox">Latin Quarter</label></li>
                    </ul>
                </div>
            </div><!--End collapse -->
        </div><!--End filters col-->
        <div class="box_style_2">
            <i class="icon_set_1_icon-57"></i>
            <h4>Need <span>Help?</span></h4>
            <a href="tel://004542344599" class="phone">+45 423 445 99</a>
            <small>Monday to Friday 9.00am - 7.30pm</small>
        </div>
        </aside><!--End aside -->
        
        <div class="col-lg-9 col-md-9">
            
           <div id="tools">
           <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="styled-select-filters">
                                <select name="sort_price" id="sort_price">
                                    <option value="" selected>Sort by price</option>
                                    <option value="lower">Lowest price</option>
                                    <option value="higher">Highest price</option>
                                </select>
                </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="styled-select-filters">
                                <select  name="sort_rating" id="sort_rating">
                                    <option value="" selected>Sort by ranking</option>
                                    <option value="lower">Lowest ranking</option>
                                    <option value="higher">Highest ranking</option>
                                </select>
                </div>
             </div>
            
            <div class="col-md-6 col-sm-6 hidden-xs text-right">
                <a href="all_hotels_grid.html" class="bt_filters"><i class="icon-th"></i></a> <a href="#" class="bt_filters"><i class=" icon-list"></i></a>
            </div>
            </div>
            </div><!--/tools -->
          
                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                   <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="ribbon_3 popular"><span>Popular</span></div>
                    <div class="wishlist">
                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
              </div>      
                        <div class="img_list"><a href="{{URL::asset('/single_hotel')}}"><img src="{{ asset('img/hotel_1.jpg') }}" alt="Image">
                        <div class="short_info"></div>
                        </a>
                        </div>
                    </div>
                     <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                            <div class="score">Superb<span>9.0</span></div>
                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star-empty"></i></div>
                            <h3><strong>Park Hyatt</strong> Hotel</h3>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <ul class="add_info">
                                <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Free Wifi"><i class="icon_set_1_icon-86"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Plasma TV with cable channels"><i class="icon_set_2_icon-116"></i></a>
                               </li>
                                <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Swimming pool"><i class="icon_set_2_icon-110"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Fitness Center"><i class="icon_set_2_icon-117"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Restaurant"><i class="icon_set_1_icon-58"></i></a>
                               </li>
                            </ul>
                            </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="price_list"><div><sup>$</sup>89*<span class="normal_price_list">$99</span><small >*From/Per night</small>
                        <p><a href="{{URL::asset('/single_hotel')}}" class="btn_1">Details</a></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div><!--End strip -->
                
                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                   <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="ribbon_3 popular"><span>Popular</span></div>
                    <div class="wishlist">
                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
              </div>      
                        <div class="img_list"><a href="{{URL::asset('/single_hotel')}}"><img src="{{ asset('img/hotel_2.jpg') }}" alt="Image">
                        <div class="short_info"></div>
                        </a>
                        </div>
                    </div>
                     <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                            <div class="score">Superb<span>9.0</span></div>
                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star-empty"></i></div>
                            <h3><strong>Mariott</strong> Hotel</h3>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <ul class="add_info">
                                <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Free Wifi"><i class="icon_set_1_icon-86"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Plasma TV with cable channels"><i class="icon_set_2_icon-116"></i></a>
                               </li>
                                <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Swimming pool"><i class="icon_set_2_icon-110"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Fitness Center"><i class="icon_set_2_icon-117"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Restaurant"><i class="icon_set_1_icon-58"></i></a>
                               </li>
                            </ul>
                            </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="price_list"><div><sup>$</sup>39*<span class="normal_price_list">$99</span><small >*From/Per night</small>
                        <p><a href="{{URL::asset('/single_hotel')}}" class="btn_1">Details</a></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div><!--End strip -->
                
                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                   <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="ribbon_3"><span>Top rated</span></div>
                    <div class="wishlist">
                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
              </div>      
                        <div class="img_list"><a href="{{URL::asset('/single_hotel')}}"><img src="{{ asset('img/hotel_3.jpg') }}" alt="Image">
                        <div class="short_info"></div>
                        </a>
                        </div>
                    </div>
                     <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                            <div class="score">Superb<span>9.0</span></div>
                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i></div>
                            <h3><strong>Lumiere</strong> Hotel</h3>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <ul class="add_info">
                                <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Free Wifi"><i class="icon_set_1_icon-86"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Plasma TV with cable channels"><i class="icon_set_2_icon-116"></i></a>
                               </li>
                                <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Swimming pool"><i class="icon_set_2_icon-110"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Fitness Center"><i class="icon_set_2_icon-117"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Restaurant"><i class="icon_set_1_icon-58"></i></a>
                               </li>
                            </ul>
                            </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="price_list"><div><sup>$</sup>129*<span class="normal_price_list">$99</span><small >*From/Per night</small>
                        <p><a href="{{URL::asset('/single_hotel')}}" class="btn_1">Details</a></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div><!--End strip -->
                
                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                   <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="ribbon_3"><span>Top rated</span></div>
                    <div class="wishlist">
                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
              </div>      
                        <div class="img_list"><a href="{{URL::asset('/single_hotel')}}"><img src="{{ asset('img/hotel_4.jpg') }}" alt="Image">
                        <div class="short_info"></div>
                        </a>
                        </div>
                    </div>
                     <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                            <div class="score">Good<span>7.5</span></div>
                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star-empty"></i><i class="icon-star-empty"></i></div>
                            <h3><strong>Concorde</strong> Hotel</h3>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <ul class="add_info">
                                <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Free Wifi"><i class="icon_set_1_icon-86"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Plasma TV with cable channels"><i class="icon_set_2_icon-116"></i></a>
                               </li>
                                <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Swimming pool"><i class="icon_set_2_icon-110"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Fitness Center"><i class="icon_set_2_icon-117"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Restaurant"><i class="icon_set_1_icon-58"></i></a>
                               </li>
                            </ul>
                            </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="price_list"><div><sup>$</sup>119*<span class="normal_price_list">$99</span><small >*From/Per night</small>
                        <p><a href="{{URL::asset('/single_hotel')}}" class="btn_1">Details</a></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div><!--End strip -->
                
                <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.1s">
                   <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="ribbon_3"><span>Top rated</span></div>
                    <div class="wishlist">
                <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
              </div>      
                        <div class="img_list"><a href="{{URL::asset('/single_hotel')}}"><img src="{{ asset('img/hotel_5.jpg') }}" alt="Image">
                        <div class="short_info"></div>
                        </a>
                        </div>
                    </div>
                     <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="tour_list_desc">
                            <div class="score">Very Good<span>8.0</span></div>
                            <div class="rating"><i class="icon-star voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i><i class="icon-star  voted"></i></div>
                            <h3><strong>Concorde</strong> Hotel</h3>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum...</p>
                            <ul class="add_info">
                                <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Free Wifi"><i class="icon_set_1_icon-86"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Plasma TV with cable channels"><i class="icon_set_2_icon-116"></i></a>
                               </li>
                                <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Swimming pool"><i class="icon_set_2_icon-110"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Fitness Center"><i class="icon_set_2_icon-117"></i></a>
                               </li>
                               <li>
                                     <a href="javascript:void(0);" class="tooltip-1" data-placement="top" title="Restaurant"><i class="icon_set_1_icon-58"></i></a>
                               </li>
                            </ul>
                            </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <div class="price_list"><div><sup>$</sup>129*<span class="normal_price_list">$99</span><small >*From/Per night</small>
                        <p><a href="{{URL::asset('/single_hotel')}}" class="btn_1">Details</a></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div><!--End strip -->
             
                <hr>
                
                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div><!-- end pagination-->
              
        </div><!-- End col lg-9 -->
    </div><!-- End row -->
</div><!-- End container -->

<!--footer -->    
@include('includes.footer')
<!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Common scripts -->
@include('layouts.scripts')

<!-- Specific scripts -->
<!-- Check and radio inputs -->
<script src="{{ asset('js/icheck.js') }}"></script>
<script>  
$('input').iCheck({
   checkboxClass: 'icheckbox_square-grey',
   radioClass: 'iradio_square-grey'
 });
 </script>
 <!-- Map -->
<script src="{{ asset('http://maps.googleapis.com/maps/api/js') }}"></script>
<script src="{{ asset('js/map_hotels.js') }}"></script>
<script src="{{ asset('js/infobox.js') }}"></script>

  </body>
</html>