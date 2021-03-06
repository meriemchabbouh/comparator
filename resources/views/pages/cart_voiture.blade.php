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
    <link href="{{ asset('css/jquery.switch.css') }}" rel="stylesheet">
    
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
            
                <div class="col-xs-4 bs-wizard-step active">
                  <div class="text-center bs-wizard-stepnum">Your cart</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="#0" class="bs-wizard-dot"></a>
                </div>
                               
                <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum">Your details</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="{{URL::asset('/payment_voiture')}}" class="bs-wizard-dot"></a>
                </div>
            
              <div class="col-xs-4 bs-wizard-step disabled">
                  <div class="text-center bs-wizard-stepnum">Finish!</div>
                  <div class="progress"><div class="progress-bar"></div></div>
                  <a href="confirmation.html" class="bs-wizard-dot"></a>
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
    <div class="col-md-8">
        <table class="table table-striped cart-list add_bottom_30">
            <thead>
            <tr>
                <th>
                    Item
                </th>
                <th>
                    Quantity
                </th>
                <th>
                    Discount
                </th>
                <th>
                    Total
                </th>
                <th>
                    Actions
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <div class="thumb_cart">
                        <img src="{{ asset('img/thumb_cart_1.jpg') }}" alt="Image">
                    </div>
                     <span class="item_cart">Louvre Museum tickets</span>
                </td>
                <td>
                    <div class="numbers-row">
                        <input type="text" value="1" id="quantity_1" class="qty2 form-control" name="quantity_1">
                    </div>
                </td>
                <td>
                    0%
                </td>
                <td>
                    <strong>€24,71</strong>
                </td>
                <td class="options">
                    <a href="#"><i class=" icon-trash"></i></a><a href="#"><i class="icon-ccw-2"></i></a>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="thumb_cart">
                        <img src="{{ asset('img/thumb_cart_1.jpg') }}" alt="Image">
                    </div>
                    <span class="item_cart">Eiffell tour</span>
                </td>
                <td>
                    <div class="numbers-row">
                        <input type="text" value="0" id="quantity_2" class="qty2 form-control" name="quantity_2">
                    </div>
                </td>
                <td>
                    0%
                </td>
                <td>
                    <strong>€0,0</strong>
                </td>
                <td class="options">
                    <a href="#"><i class=" icon-trash"></i></a><a href="#"><i class="icon-ccw-2"></i></a>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="thumb_cart">
                        <img src="{{ asset('img/thumb_cart_1.jpg') }}" alt="Image">
                    </div>
                     <span class="item_cart">Senna river Tour</span>
                </td>
                <td>
                    <div class="numbers-row">
                        <input type="text" value="1" id="quantity_3" class="qty2 form-control" name="quantity_3">
                    </div>
                </td>
                <td>
                    0%
                </td>
                <td>
                    <strong>€24,71</strong>
                </td>
                <td class="options">
                    <a href="#"><i class=" icon-trash"></i></a><a href="#"><i class="icon-ccw-2"></i></a>
                </td>
            </tr>
            </tbody>
            </table>
            <table class="table table-striped options_cart">
            <thead>
            <tr>
                <th colspan="3">
                    Add options / Services
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="width:10%">
                    <i class="icon_set_1_icon-16"></i>
                </td>
                <td style="width:60%">
                    Dedicated Tour guide <strong>+$34</strong>
                </td>
                <td style="width:35%">
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_1" id="option_1" checked value="">
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="icon_set_1_icon-26"></i>
                </td>
                <td>
                    Pick up service <strong>+$34*</strong>
                </td>
                <td>
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_2" id="option_2" value="">
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="icon_set_1_icon-71"></i>
                </td>
                <td>
                    Insurance <strong>+$24*</strong>
                </td>
                <td>
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_3" id="option_3" value="" checked>
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="icon_set_1_icon-15"></i>
                </td>
                <td>
                    Welcome bottle <strong>+$24</strong>
                </td>
                <td>
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_4" id="option_4" value="">
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="icon_set_1_icon-59"></i>
                </td>
                <td>
                    Coffe break <strong>+$12*</strong>
                </td>
                <td>
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_5" id="option_5" value="">
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="icon_set_1_icon-58"></i>
                </td>
                <td>
                    Dinner <strong>+$26*</strong>
                </td>
                <td>
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_6" id="option_6" value="">
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <i class="icon_set_1_icon-40"></i>
                </td>
                <td>
                    Bike rent <strong>+$26*</strong>
                </td>
                <td>
                    <label class="switch-light switch-ios pull-right">
                    <input type="checkbox" name="option_7" id="option_7" value="">
                    <span>
                    <span>No</span>
                    <span>Yes</span>
                    </span>
                    <a></a>
                    </label>
                </td>
            </tr>
            </tbody>
            </table>
            <div class="add_bottom_15"><small>* Prices for person.</small></div>
    </div><!-- End col-md-8 -->
    
    <aside class="col-md-4" id="sidebar">
    <div class="theiaStickySidebar">
    <div class="box_style_1" >
        <h3 class="inner">- Summary -</h3>
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
                Dedicated tour guide
            </td>
            <td class="text-right">
                $34
            </td>
        </tr>
        <tr>
            <td>
                Insurance
            </td>
            <td class="text-right">
                $34
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
        <a class="btn_full" href="{{URL::asset('/payment_voiture')}}">Check out</a>
        <a class="btn_full_outline" href="#"><i class="icon-right"></i> Continue shopping</a>
    </div>
    </div><!-- End sitcky -->
    </aside><!-- End aside -->

</div><!--End row -->
</div><!--End container -->

<!--footer -->
@include('includes.footer')
<!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Jquery -->
@include('layouts.scripts')
 <!-- Fixed sidebar -->
<script src="{{ asset('js/theia-sticky-sidebar.js') }}"></script>
<script>
    jQuery('#sidebar').theiaStickySidebar({
      additionalMarginTop: 80
    });
</script>

  </body>
</html>