    <header>
        <div id="top_line">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6"><i class="icon-phone"></i><strong>0045 043204434</strong></div>
                    
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <ul id="top_links">
                            @if (Auth::check())
                             
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="access_link">{{Auth::user()-> email }}</a>
                                    <div class="dropdown-menu">
                                    @if(Auth::user()->type==1)    
                                       <p>
                                        <a style="color:#e04f67" href="{{URL::route('get-editprovider')}}"> Editer profile</a>
                                       </p>
                                    @else
                                       <p>
                                        <a style="color:#e04f67" href="{{URL::route('get-editclient')}}"> Editer profile</a>
                                       </p>
                                    @endif   
                                     <input type="button" name="Sign_up" value="Log out" onClick='window.open("{{ URL::asset('/logout') }}", "_self")' class="button_drop outline">
                                    </div>
                                </div><!-- End Dropdown access -->
                            </li>

                            @else 
                            <li>
                                <div class="dropdown dropdown-access">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="access_link">Sign in</a>
                                    <div class="dropdown-menu">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <a href="#" class="bt_facebook">
                                                    <i class="icon-facebook"></i>Facebook </a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                <a href="#" class="bt_paypal">
                                                    <i class="icon-paypal"></i>Paypal </a>
                                            </div>
                                        </div>
                                        <div class="login-or">
                                            <hr class="hr-or">
                                            <span class="span-or">or</span>
                                        </div>
                                    <form method="post" action="{{URL::route('post-login')}}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="inputUsernameEmail" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                                        </div>
                                        <a id="forgot_pw" href="#">Forgot password?</a>
                                        <input type="submit" name="Sign_in" value="Sign in" id="Sign_in" class="button_drop">
                                        <input type="button" name="Sign_up" value="Sign up" id="Sign_up" onClick='window.open("{{ URL::asset('/register') }}")' class="button_drop outline">
                                    </form>
                                    </div>
                                </div><!-- End Dropdown access -->
                            </li>
                            @endif
                            <li><a href="{{URL::asset('/wishlist')}}" id="wishlist_link">Wishlist</a></li>
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End container-->
        </div><!-- End top line-->
        
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div id="logo_home">
                        <h1><a href="{{URL::asset('/')}}" title="City tours travel template">City Tours travel template</a></h1>
                    </div>
                </div>
                <nav class="col-md-9 col-sm-9 col-xs-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="{{ asset('img/logo_sticky.png') }}" width="160" height="34" alt="City tours" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                            <li class="submenu">
                                    <a href="{{URL::asset('/')}}">Home  </a>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Voitures <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="{{URL::asset('/voitures')}}">All voitures list</a></li>
                                    <li><a href="all_tours_grid">All voitures grid</a></li>
                                    <li><a href="all_tours_map_listing.html">All voitures map listing</a></li>
                                    <li><a href="single_tour.html">Single voiture page</a></li>
                                    <li><a href="{{URL::asset('/single_voiture')}}">Single voiture with gallery</a></li>
                                    <li><a href="javascript:void(0);">Single voiture fixed sidebar</a>
                                        <ul>
                                            <li><a href="single_tour_fixed_sidebar.html">Single voiture fixed sidebar</a></li>
                                            <li><a href="single_tour_with_gallery_fixed_sidebar.html">Single voiture 2 Fixed Sidebar</a></li>
                                            <li><a href="cart_fixed_sidebar.html">Cart Fixed Sidebar</a></li>
                                            <li><a href="payment_fixed_sidebar.html">Payment Fixed Sidebar</a></li>
                                            <li><a href="confirmation_fixed_sidebar.html">Confirmation Fixed Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="single_tour_working_booking.php">Single voiture working booking</a></li>
                                    <li><a href="cart.html">Single voiture cart</a></li>
                                    <li><a href="payment.html">Single voiture booking</a></li>
                                </ul>
                            </li>
                             <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Hotels <i class="icon-down-open-mini"></i></a><ul>
                                    <li><a href="{{URL::asset('/all_hotels_list')}}">All hotels list</a></li>
                                    <li><a href="all_hotels_grid.html">All hotels grid</a></li>
                                    <li><a href="all_hotels_map_listing.html">All hotels map listing</a></li>
                                    <li><a href="{{URL::asset('/single_hotel')}}">Single hotel page</a></li>
                                    <li><a href="single_hotel_datepicker_adv.html">Single hotel datepicker adv</a></li>
                                    <li><a href="single_hotel_working_booking.php">Single hotel working booking</a></li>
                                    <li><a href="{{URL::asset('/cart_hotel')}}">Cart hotel</a></li>
                                    <li><a href="{{URL::asset('/payment_hotel')}}">Booking hotel</a></li>
                                    <li><a href="{{URL::asset('/confirmation_hotel')}}">Confirmation hotel</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Transfers <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="all_transfer_list.html">All transfers list</a></li>
                                    <li><a href="all_transfer_grid.html">All transfers grid</a></li>
                                    <li><a href="single_transfer.html">Single transfer page</a></li>
                                    <li><a href="cart_transfer.html">Cart transfers</a></li>
                                    <li><a href="payment_transfer.html">Booking transfers</a></li>
                                    <li><a href="confirmation_transfer.html">Confirmation transfers</a></li>
                                </ul>
                            </li>
                              <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Restaurants <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="all_restaurants_list.html">All restaurants list</a></li>
                                    <li><a href="all_restaurants_grid.html">All restaurants grid</a></li>
                                    <li><a href="all_restaurants_map_listing.html">All restaurants map listing</a></li>
                                    <li><a href="single_restaurant.html">Single restaurant page</a></li>
                                    <li><a href="payment_restaurant.html">Booking restaurant</a></li>
                                    <li><a href="confirmation_transfer.html">Confirmation transfers</a></li>
                                </ul>
                            </li>
                             <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Bonus <i class="icon-down-open-mini"></i></a><ul>
                                    <li><a href="javascript:void(0);">Header styles</a>
                                        <ul>
                                            <li><a href="index.html">Header default</a></li>
                                            <li><a href="header_2.html">Header style 2</a></li>
                                            <li><a href="header_3.html">Header style 3</a></li>
                                            <li><a href="header_4.html">Header style 4</a></li>
                                            <li><a href="header_5.html">Header style 5</a></li>
                                            <li><a href="header_6.html">Header style 6</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);">Footer styles</a>
                                        <ul>
                                            <li><a href="index.html">Footer default</a></li>
                                            <li><a href="footer_2.html">Footer style 2</a></li>
                                            <li><a href="footer_3.html">Footer style 3</a></li>
                                            <li><a href="footer_4.html">Footer style 4</a></li>
                                            <li><a href="footer_5.html">Footer style 5</a></li>
                                            <li><a href="footer_6.html">Footer style 6</a></li>
                                            <li><a href="footer_7.html">Footer style 7</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);">Shop</a>
                                        <ul>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-single.html">Shop single</a></li>
                                            <li><a href="shopping-cart.html">Shop cart</a></li>
                                            <li><a href="checkout.html">Shop Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="single_hotel_contact.php">Hotel page contact form</a></li>
                                </ul>
                            </li>
                            <li class="megamenu submenu">
                                <a href="javascript:void(0);" class="show-submenu-mega">Pages<i class="icon-down-open-mini"></i></a>
                                <div class="menu-wrapper">
                                    <div class="col-md-4">
                                        <h3>Pages</h3>
                                        <ul>
                                            <li><a href="{{URL::asset('/about')}}">About us</a></li>
                                           <li><a href="general_page.html">General page</a></li>
                                            <li><a href="tourist_guide.html">Tourist guide</a></li>
                                             <li><a href="{{URL::asset('/wishlist')}}">Wishlist page</a></li>
                                             <li><a href="faq.html">Faq</a></li>
                                             <li><a href="faq_2.html">Faq smooth scroll</a></li>
                                             <li><a href="pricing_tables.html">Pricing tables</a></li>
                                             <li><a href="gallery_3_columns.html">Gallery 3 columns</a></li>
                                            <li><a href="gallery_4_columns.html">Gallery 4 columns</a></li>
                                            <li><a href="grid_gallery_1.html">Grid gallery</a></li>
                                            <li><a href="grid_gallery_2.html">Grid gallery with filters</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3>Pages</h3>
                                        <ul>
                                            <li><a href="{{URL::asset('/contact')}}.html">Contact us 1</a></li>
                                            <li><a href="contact_us_2.html">Contact us 2</a></li>
                                             <li><a href="blog_right_sidebar.html">Blog</a></li>
                                            <li><a href="blog.html">Blog left sidebar</a></li>
                                            <li><a href="{{URL::asset('/login')}}">Login</a></li>
                                            <li><a href="{{URL::asset('/register')}}">Register</a></li>
                                            <li><a href="invoice.html" target="_blank">Invoice</a></li>
                                            <li><a href="404.html">404 Error page</a></li>
                                            <li><a href="site_launch/index.html">Site launch / Coming soon</a></li>
                                            <li><a href="timeline.html">Tour timeline</a></li>
                                            <li><a href="page_with_map.html"><i class="icon-map"></i>  Full screen map</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <h3>Elements</h3>
                                        <ul>
                                            <li><a href="footer_2.html"><i class="icon-columns"></i> Footer with working newsletter</a></li>
                                            <li><a href="footer_5.html"><i class="icon-columns"></i> Footer with Twitter feed</a></li>
                                            <li><a href="icon_pack_1.html"><i class="icon-inbox-alt"></i> Icon pack 1 (1900)</a></li>
                                            <li><a href="icon_pack_2.html"><i class="icon-inbox-alt"></i> Icon pack 2 (100)</a></li>
                                            <li><a href="icon_pack_3.html"><i class="icon-inbox-alt"></i> Icon pack 3 (30)</a></li>
                                            <li><a href="shortcodes.html"><i class="icon-tools"></i> Shortcodes</a></li>
                                            <li><a href="newsletter_template/newsletter.html" target="blank"><i class=" icon-mail"></i> Responsive email template</a></li>
                                            <li><a href="admin.html"><i class="icon-cog-1"></i>  Admin area</a></li>
                                            <li><a href="general_page.html"><i class="icon-light-up"></i>  Weather Forecast</a></li>                                             
                                        </ul>
                                    </div>
                                </div><!-- End menu-wrapper -->
                            </li>
                        </ul>
                    </div><!-- End main-menu -->
                    <ul id="top_tools">
                        <li>
                            <div class="dropdown dropdown-search">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></a>
                                <div class="dropdown-menu">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <span class="input-group-btn">
                                            <button class="btn btn-default" type="button" style="margin-left:0;">
                                            <i class="icon-search"></i>
                                            </button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown dropdown-cart">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class=" icon-basket-1"></i>Cart (0) </a>
                                <ul class="dropdown-menu" id="cart_items">
                                    <li>
                                        <div class="image"><img src="{{ asset('img/thumb_cart_1.jpg') }}" alt="image"></div>
                                        <strong>
                                        <a href="#">Louvre museum</a>1x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div class="image"><img src="{{ asset('img/thumb_cart_2.jpg') }}" alt="image"></div>
                                        <strong>
                                        <a href="#">Versailles tour</a>2x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div class="image"><img src="{{ asset('img/thumb_cart_3.jpg') }}" alt="image"></div>
                                        <strong>
                                        <a href="#">Versailles tour</a>1x $36.00 </strong>
                                        <a href="#" class="action"><i class="icon-trash"></i></a>
                                    </li>
                                    <li>
                                        <div>Total: <span>$120.00</span></div>
                                        <a href="cart.html" class="button_drop">Go to cart</a>
                                        <a href="payment.html" class="button_drop outline">Check out</a>
                                    </li>
                                </ul>
                            </div><!-- End dropdown-cart-->
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!-- container -->
    </header><!-- End Header -->