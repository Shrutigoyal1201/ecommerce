<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="" />
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('frontend/img/logo.jpg')}}" />

    <!--********************************** 
        all css files 
    *************************************-->

    <!--*************************************************** 
       fontawesome,bootstrap,plugins and main style css
     ***************************************************-->

    <link rel="stylesheet" href="{{url('frontend/css/fontawesome.min.css')}}"/>
    <link rel="stylesheet" href="{{url('frontend/css/ionicons.min.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/css/simple-line-icons.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/css/plugins/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/css/plugins/plugins.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/css/style.min.css')}}" />

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!--**************************** 
         Minified  css 
    ****************************-->

    <!--*********************************************** 
       vendor min css,plugins min css,style min css
     ***********************************************-->
    <!-- <link rel="stylesheet" href="{{url('frontend/assets/css/vendor/vendor.min.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/assets/css/plugins/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{url('frontend/assets/css/style.min.css')}}" /> -->

    <style type="text/css">
        .nav-color
        {
            background-image: linear-gradient(to right,#1e3131,#69d6d6);
        }
        .btn
        {
            background-color:#00868B!important;
        }
        .menu-btn,.theme-default
        {
            background-image: linear-gradient(to right,#69d6d6,#1e3131)!important;
        }
       
    </style>
</head>

<body>

<!-- offcanvas-overlay start -->
<div class="offcanvas-overlay"></div>
<!-- offcanvas-overlay end -->
<!-- offcanvas-mobile-menu start -->
<div id="offcanvas-mobile-menu" class="offcanvas theme3 offcanvas-mobile-menu">
    <div class="inner">
        <div class="border-bottom mb-4 pb-4 text-right">
            <button class="offcanvas-close">×</button>
        </div>
        <div class="offcanvas-head mb-4">
            <nav class="offcanvas-top-nav">
                <ul class="d-flex justify-content-center align-items-center">
                    <li class="mx-4"><a href="compare.html"><i class="ion-ios-loop-strong"></i> Compare <span>(0)</span>
                        </a></li>
                    <li class="mx-4">
                        <a href="wishlist.html"> <i class="ion-android-favorite-outline"></i> Wishlist
                            <span>(0)</span></a>
                    </li>
                </ul>
            </nav>
        </div>
        <nav class="offcanvas-menu">
            <ul>
                <li><a href="{{url('/')}}"><span>Home</span></a>
                    
                </li>
               <!--  <li><a href="#"><span class="menu-text">Shop</span></a>
                    <ul class="offcanvas-submenu">
                        <li>
                            <a href="#"><span class="menu-text">Shop Grid</span></a>
                            <ul class="offcanvas-submenu">
                                <li><a href="shop-grid-3-column.html">Shop Grid 3 Column</a></li>
                                <li><a href="shop-grid-4-column.html">Shop Grid 4 Column</a></li>
                                <li><a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                <li><a href="shop-grid-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Shop List</span></a>
                            <ul class="offcanvas-submenu">
                                <li><a href="shop-grid-list.html">Shop List</a></li>
                                <li><a href="shop-grid-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                <li><a href="shop-grid-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="menu-text">Shop Single</span></a>
                            <ul class="offcanvas-submenu">
                                <li><a href="single-product.html">Shop Single</a></li>
                                <li><a href="single-product-configurable.html">Shop Variable</a></li>
                                <li><a href="single-product-affiliate.html">Shop Affiliate</a></li>
                                <li><a href="single-product-group.html">Shop Group</a></li>
                            </ul>
                        </li>
                       
                    </ul>
                </li> -->
                
                <li><a href="{{url('contact')}}">Contact Us</a></li>
            </ul>
        </nav>
        <div class="offcanvas-social py-30">
            <ul>
                <li>
                    <a href="#"><i class="icon-social-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="icon-social-google"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-phone"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </li>
                
            </ul>
        </div>
    </div>
</div>
<!-- offcanvas-mobile-menu end -->
<!-- OffCanvas Wishlist Start -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist theme3">
    <div class="inner">
        <div class="head d-flex flex-wrap justify-content-between">
            <span class="title">Wishlist</span>
            <button class="offcanvas-close">×</button>
        </div>
        <ul class="minicart-product-list">
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/4.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Walnut Cutting Board</a>
                    <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/5.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                    <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/6.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Fish Cut Out Set</a>
                    <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
        </ul>
        <a href="wishlist.html" class="btn theme--btn-ddefault btn--lg d-block d-sm-inline-block rounded-5 mt-30">view
            wishlist</a>
    </div>
</div>
<!-- OffCanvas Wishlist End -->

<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart theme3">
    <div class="inner">
        <div class="head d-flex flex-wrap justify-content-between">
            <span class="title">Cart</span>
            <button class="offcanvas-close">×</button>
        </div>
        <ul class="minicart-product-list">
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/1.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Walnut Cutting Board</a>
                    <span class="quantity-price">1 x <span class="amount">$100.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/2.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Lucky Wooden Elephant</a>
                    <span class="quantity-price">1 x <span class="amount">$35.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
            <li>
                <a href="single-product.html" class="image"><img src="assets/img/product/3.jpg"
                        alt="Cart product Image"></a>
                <div class="content">
                    <a href="single-product.html" class="title">Fish Cut Out Set</a>
                    <span class="quantity-price">1 x <span class="amount">$9.00</span></span>
                    <a href="#" class="remove">×</a>
                </div>
            </li>
        </ul>
        <div class="sub-total d-flex flex-wrap justify-content-between">
            <strong>Subtotal :</strong>
            <span class="amount">$144.00</span>
        </div>
        <a href="{{url('cart')}}" class="btn theme--btn-ddefault btn--lg d-block d-sm-inline-block rounded-5 mr-sm-2">view
            cart</a>
        <a href="checkout.html"
            class="btn theme-btn--dark3 btn--lg d-block d-sm-inline-block mt-4 mt-sm-0 rounded-5">checkout</a>
        <p class="minicart-message">Free Shipping on All Orders Over $100!</p>
    </div>
</div>
<!-- OffCanvas Cart End -->
<!-- header start -->
<header>
    <!-- header top start -->
    <div id="sticky" class="header-top theme3 nav-color d-none d-lg-block">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-xl-9 col-lg-8 position-xl-relative">
                    <!-- header bottom start -->
                    <nav class="header-bottom">
                        <ul class="main-menu d-flex">
                            <li class="active ml-0">
                                <a href="{{url('/')}}" class="pl-0">Home</a>
                                
                            </li>
                            
                             <li><a href="{{url('about')}}">About</a></li>

                            <li><a href="{{url('contact')}}">contact Us</a></li>
                        </ul>
                    </nav>
                    <!-- header bottom end -->
                </div>
                <div class="col-xl-3 col-lg-4">
                    <nav class="navbar-top pb-2 pb-md-0">
                        <ul class="d-flex justify-content-center justify-content-md-end align-items-center">
                            @if(Auth::check())
                             
                                <li>
                                <a href="#" id="dropdown1" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="fas fa-user text-uppercase">  {{Auth::user()->name}} <i class="ion ion-ios-arrow-down"></i></i></a>
                                <ul class="topnav-submenu dropdown-menu" aria-labelledby="dropdown1">
                                    <li><a href="{{url('account')}}">My account</a></li>
                                    <li><a href="{{url('cart')}}">Checkout</a></li>
                                    <li><a href="{{url('front/logout')}}">Sign out</a></li>
                                </ul>
                            </li></i>
                            
                            @else
                            
                            <li><a href="{{url('front/login')}}">Login</a></li>
                            <li><a href="{{url('front/register')}}">Register</a></li>
                                 
                            @endif

                            <li class="nav-item dropdown">
                                <a href="#" id="dropdown1" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">CONNECT! <i class="ion ion-ios-arrow-down"></i>
                                </a>
                                <!--dropdown menu start-->
                               <ul class="topnav-submenu dropdown-menu" aria-labelledby="dropdown1">
                                    <li><a class="dropdown-item text-dark" href="tel:9144480962">
                                        <i class="fa fa-phone" aria-hidden="true" style="color:black;font-size: 20px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Call us
                                    </a></li>
                                    <li><a class="dropdown-item text-dark" href="https://wa.link/6hjrok">
                                        <i class="fab fa-whatsapp" aria-hidden="true" style="color:black;font-size: 20px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Chat with us
                                    </a></li>
                                    <li><a class="dropdown-item text-dark" href="https://www.instagram.com/jaimaagumano/">    
                                        <i class="fab fa-instagram" style="color:black;font-size: 20px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Join us on instagram
                                    </a></li>
                                    <li><a class="dropdown-item text-dark" href="https://m.facebook.com/HealthandmedicineatJMG/?tsid=0.3179322746523827&source=result">
                                        <i class="fab fa-facebook-f" style="color:black;font-size: 20px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Join us on facebook 
                                    </a></li>
                                    <li><a class="dropdown-item text-dark" href="mailto:sales.jaimaagumano@gmail.com">
                                        <i class="fab fa-google" aria-hidden="true" style="color:black;font-size: 20px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;Send us an Email
                                    </a></li>
                                </ul><!--dropdown menu end-->
                            </li>
                           
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- header top end -->
    <!-- header-middle satrt -->
    <div class="header-middle theme3 bg-white py-30">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-5 col-lg-2 order-first">
                    <div class="logo text-center text-sm-left mb-30 mb-sm-0">
                        <a href="{{url('/')}}"><img src="{{url('frontend/img/logo.jpg')}}" width="30%" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-0">
                    <div class="d-flex flex-wrap w-100 align-items-center">
                        <div class="vertical-menu d-none d-lg-block">
                            <button class="menu-btn d-flex"><span class="ion-android-menu"></span>All Categories<span
                                    class="ion-ios-arrow-down d-block ml-auto"></span> </button>
                            <ul class="vmenu-content display-none">
                                <li class="menu-item">
                                    <a href="#"> Beauty & Health <i class="ion-ios-arrow-right"></i></a>
                                    <ul class="verticale-mega-menu flex-wrap">
                                        <li>
                                            <a href="#">
                                                <span> <strong>Makeup</strong></span>
                                            </a>
                                            <ul class="submenu-item">
                                                <li><a href="#">Eyes</a></li>
                                                <li><a href="#">Lips</a></li>
                                                <li><a href="#">Face</a></li>
                                                <li><a href="#">Makeup Tools</a></li>
                                            </ul>

                                        </li>
                                        <li>
                                            <a href="#">
                                                <span><strong>Health Care</strong></span>
                                            </a>
                                            <ul class="submenu-item">
                                                <li><a href="#">Massage &amp; Relaxation</a></li>
                                                <li><a href="#">Household Health Monitors</a></li>
                                                <li><a href="#">Chinese Medicine</a></li>
                                                <li><a href="#">Personal Health Care Items</a></li>
                                            </ul>

                                        </li>

                                        <li>
                                            <a href="#">
                                                <span><strong>Skin Care</strong></span>
                                            </a>
                                            <ul class="submenu-item">
                                                <li><a href="#">Face</a></li>
                                                <li><a href="#">Eyes</a></li>
                                                <li><a href="#">Body</a></li>
                                                <li><a href="#">Skin Care Tools</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span><strong>Nail Art & Tools</strong></span>
                                            </a>
                                            <ul class="submenu-item">
                                                <li><a href="#">Gel Nail Polish</a></li>
                                                <li><a href="#">Nail Drills</a></li>
                                                <li><a href="#">Nail Dryers</a></li>
                                                <li><a href="#">Nail Glitter</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                    <!-- sub menu -->
                                </li>
                                <li class="menu-item">
                                    <a href="#">Skin Care <i class="ion-ios-arrow-right"></i></a>
                                    <ul class="verticale-sub-menu">
                                        <li>
                                            <ul class="submenu-item">
                                                <li><a href="#">Face</a></li>
                                                <li><a href="#">Eyes</a></li>
                                                <li><a href="#">Body</a></li>
                                                <li><a href="#">Skin Care Tools</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                </li>
                                <li class="menu-item">
                                    <a href="#"> Health Care <i class="ion-ios-arrow-right"></i></a>
                                    <ul class="verticale-sub-menu">
                                        <li>
                                            <ul class="submenu-item">
                                                <li><a href="#">Massage & Relaxation</a></li>
                                                <li><a href="#">Household Health Monitors</a></li>
                                                <li><a href="#">Chinese Medicine</a></li>
                                                <li><a href="#">Personal Health Care Items</a></li>
                                            </ul>
                                        </li>
                                    </ul>

                                </li>
                                <li class="menu-item"><a href="#">Face</a></li>
                                <li class="menu-item"><a href="#">Eyes</a></li>
                                <li class="menu-item"><a href="#">Lips</a></li>
                                <li class="menu-item"><a href="#">Makeup Tools</a></li>
                                <li class="menu-item"><a href="#">Skin Care Tools</a></li>
                                <li class="menu-item"><a href="#">Massage & Relaxation</a></li>
                            </ul>
                            <!-- menu content -->
                        </div>
                        <div class="search-form width-calc-from-left pl-35 mt-30 mt-lg-0">
                            <form class="form-inline position-relative">
                                <input class="form-control theme3" type="search"
                                    placeholder="Search by product,brand or more...">
                                <button class="btn bg-white search-btn position-left" type="submit"><i
                                        class="icon-magnifier"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-lg-3">
                    <!-- search-form end -->
                    <div class="d-flex align-items-center justify-content-center justify-content-sm-end">
                        <div class="cart-block-links theme3">
                            <ul class="d-flex">
                                <li>
                                    <a href="compare.html">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="offcanvas-toggle" href="#offcanvas-wishlist">
                                        <i class="icon-heart"></i>  
                                    </a>
                                </li>
                                <li class="mr-0 cart-block position-relative">
                                    <a href="{{url('cart')}}">
                                        <i class="icon-bag"></i>
                                    </a>
                                </li>
                                <!-- cart block end -->
                                <!-- <li>
                                    <a href="#" id="dropdown1" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><i class="fas fa-cog"></i> </a>
                                    <ul class="topnav-submenu dropdown-menu" aria-labelledby="dropdown1">
                                        <li><a href="myaccount.html">My account</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li> -->
                            
                            </ul>
                        </div>
                        <div class="mobile-menu-toggle theme3 d-lg-none">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewbox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318)">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-middle end -->
    <div class="mobile-category-nav theme3 d-lg-none pb-30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--=======  category menu  =======-->
                    <div class="hero-side-category">
                        <!-- Category Toggle Wrap -->
                        <div class="category-toggle-wrap">
                            <!-- Category Toggle -->
                            <button class="category-toggle"><i class="fa fa-bars"></i> All Categories</button>
                        </div>

                        <!-- Category Menu -->
                        <nav class="category-menu">
                            <ul>
                                <li class="menu-item-has-children menu-item-has-children-1">
                                    <a href="#">Accessories & Parts<i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-1">
                                        <li><a href="#">Cables & Adapters</a></li>
                                        <li><a href="#">Batteries</a></li>
                                        <li><a href="#">Chargers</a></li>
                                        <li><a href="#">Bags & Cases</a></li>
                                        <li><a href="#">Electronic Cigarettes</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-2">
                                    <a href="#">Camera & Photo<i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-2">
                                        <li><a href="#">Digital Cameras</a></li>
                                        <li><a href="#">Camcorders</a></li>
                                        <li><a href="#">Camera Drones</a></li>
                                        <li><a href="#">Action Cameras</a></li>
                                        <li><a href="#">Photo Studio Supplies</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-3">
                                    <a href="#">Smart Electronics <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-3">
                                        <li><a href="#">Wearable Devices</a></li>
                                        <li><a href="#">Smart Home Appliances</a></li>
                                        <li><a href="#">Smart Remote Controls</a></li>
                                        <li><a href="#">Smart Watches</a></li>
                                        <li><a href="#">Smart Wristbands</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-4">
                                    <a href="#">Audio & Video <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-4">
                                        <li><a href="#">Televisions</a></li>
                                        <li><a href="#">TV Receivers</a></li>
                                        <li><a href="#">Projectors</a></li>
                                        <li><a href="#">Audio Amplifier Boards</a></li>
                                        <li><a href="#">TV Sticks</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-5">
                                    <a href="#">Portable Audio & Video <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-5">
                                        <li><a href="#">Headphones</a></li>
                                        <li><a href="#">Speakers</a></li>
                                        <li><a href="#">MP3 Players</a></li>
                                        <li><a href="#">VR/AR Devices</a></li>
                                        <li><a href="#">Microphones</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children menu-item-has-children-6">
                                    <a href="#">Video Game <i class="ion-ios-arrow-down"></i></a>
                                    <!-- category submenu -->
                                    <ul class="category-mega-menu category-mega-menu-6">
                                        <li><a href="#">Handheld Game Players</a></li>
                                        <li><a href="#">Game Controllers</a></li>
                                        <li><a href="#">Joysticks</a></li>
                                        <li><a href="#">Stickers</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Televisions</a></li>
                                <li><a href="#">Digital Cameras</a></li>
                                <li><a href="#">Headphones</a></li>
                                <li><a href="#">Wearable Devices</a></li>
                                <li><a href="#">Smart Watches</a></li>
                                <li><a href="#">Game Controllers</a></li>
                                <li><a href="#"> Smart Home Appliances</a></li>
                                <li class="hidden"><a href="#">Projectors</a></li>
                                <li>
                                    <a href="#" id="more-btn"><i class="ion-ios-plus-empty"></i>
                                        More Categories</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=======  End of category menu =======-->
</header>
<!-- header end -->


@yield('content')


<!-- brand slider start -->
<!-- footer start -->
<div class="container-fluid" style="background: url('frontend/img/footer.jpg'); background-repeat:no-repeat; background-position: center bottom; background-size: cover;"><!--container fluid-2 start-->
        <div class="row"><!--row start-->
            <div class="col-md-4"><!--col-md-4 start-->
                <br>
                <h1 class="mb-50">Contact Us</h1>
            <div class="row mb-30">
                <h6 class="col-md-2"> Address: </h6>
                <p class="col-md-8"> Shatabdi Complex, Shop, G-5,  Huzrat Pull,  Lashkar,  Gwalior,  Madhya Pradesh 474001</p>
            </div>
            <div class="row mb-30">
                <h6 class="col-md-2">Hours:</h6>
                <p class="col-md-8"> 11:00 a.m.- 7:30 p.m.</p>
                
            </div>
            <div class="row mb-30">
                <h6 class="col-md-2">Phone:</h6>
                <p class="col-md-8">9144480962, 9826236830</p>
               
            </div>
            
            <div class="h3">
                <a href="https://m.facebook.com/HealthandmedicineatJMG/?tsid=0.3179322746523827&source=result">
                    <i class="fab fa-facebook-square"></i>
                </a>
                
                <a href="https://www.instagram.com/jaimaagumano/">
                    <i class="fab fa-instagram-square"></i>
                </a>
                <a href="https://wa.link/6hjrok">
                    <i class="fab fa-whatsapp-square ml-20 "></i>
                </a>
                <a href="tel:9144480962">
                    <i class="fas fa-phone-square ml-20 "></i>
                </a>
                <a href="mailto:sales.jaimaagumano@gmail.com">
                    <i class="fas fa-envelope ml-20 "></i>
                </a>
            </div>
       
            </div><!--col-md-4 end-->
             <div class="col-md-3 text-secondary"><!--col-md-4 start-->
                <br>
                <h1 class="mb-50">Explore</h1>
                <a href="index.html">HOME</a><br><br>
                <a href="about.html">ABOUT US</a><br><br>
                <a href="ourproducts.html">OUR PRODUCTS</a><br><br>
                <a href="brands.html">BRANDS AVAILABLE</a><br><br>
                <!--a href="" class="text-light">DISEASE AND ITS CURE</a><br><br>
                <a href="" class="text-light">OUR NETWORK</a><br><br-->
                <a href="contact.html">CONTACT US</a><br><br>
            </div><!--col-md-4 end-->
            <div class="col-md-5">
            </div>
            
        </div><!--row end-->
    </div><!--container fluid-2 end-->
<!-- footer end -->

<!-- modals start -->
<!-- first modal -->
<div class="modal fade theme3 style1" id="quick-view" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 mx-auto col-lg-5 mb-5 mb-lg-0">
                        <div class="product-sync-init mb-20">
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="assets/img/hot-deals/thumb/4.jpg" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="assets/img/hot-deals/thumb/5.jpg" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="assets/img/hot-deals/thumb/6.jpg" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <img src="assets/img/hot-deals/thumb/7.jpg" alt="product-thumb">
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>

                        <div class="product-sync-nav">
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"> <img src="assets/img/hot-deals/thumb/4.2x.jpg"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"> <img src="assets/img/hot-deals/thumb/5.2x.jpg"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"><img src="assets/img/hot-deals/thumb/6.2x.jpg"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <div class="single-product">
                                <div class="product-thumb">
                                    <a href="javascript:void(0)"><img src="assets/img/hot-deals/thumb/7.2x.jpg"
                                            alt="product-thumb"></a>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                    <div class="col-lg-7 mt-5 mt-md-0">
                        <div class="modal-product-info">
                            <div class="product-head">
                                <h2 class="title">New Balance Running Arishi trainers in triple</h2>
                                <h4 class="sub-title">Reference: demo_5</h4>
                                <div class="star-content mb-20">
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                    <span class="star-on"><i class="fas fa-star"></i> </span>
                                </div>
                            </div>
                            <div class="product-body mb-40">
                                <div class="d-flex align-items-center mb-30">
                                    <h6 class="product-price"><del class="del">$23.90</del>
                                        <span class="onsale">$21.51</span></h6>
                                    <span class="badge position-static bg-dark p-2 rounded-0 ml-2">Save 10%</span>
                                </div>
                                <p>Break old records and make new goals in the New Balance® Arishi Sport v1.</p>
                                <ul>
                                    <li>Predecessor: None.</li>
                                    <li>Support Type: Neutral.</li>
                                    <li>Cushioning: High energizing cushioning.</li>
                                </ul>
                            </div>
                            <div class="product-footer">
                                <div class="product-count style d-flex flex-column flex-sm-row my-4">
                                    <div class="count d-flex">
                                        <input type="number" min="1" max="10" step="1" value="1">
                                        <div class="button-group">
                                            <button class="count-btn increment"><i
                                                    class="fas fa-chevron-up"></i></button>
                                            <button class="count-btn decrement"><i
                                                    class="fas fa-chevron-down"></i></button>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn theme-btn--dark3 btn--xl mt-5 mt-sm-0 rounded-5">
                                            <span class="mr-2"><i class="ion-android-add"></i></span>
                                            Add to cart
                                        </button>
                                    </div>
                                </div>
                                <div class="addto-whish-list">
                                    <a href="#"><i class="icon-heart"></i> Add to wishlist</a>
                                    <a href="#"><i class="icon-shuffle"></i> Add to compare</a>
                                </div>
                                <div class="pro-social-links mt-10">
                                    <ul class="d-flex align-items-center">
                                        <li class="share">Share</li>
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-google"></i></a></li>
                                        <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- second modal -->
<div class="modal fade style2" id="compare" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="title"><i class="fa fa-check"></i> Product added to compare.</h5>
            </div>
        </div>
    </div>
</div>
<!-- second modal -->
<div class="modal fade style3" id="add-to-cart" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-center bg-dark">
                <h5 class="modal-title" id="add-to-cartCenterTitle"> <span class="ion-checkmark-round"></span>
                    Product successfully added to your shopping cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5 divide-right">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="assets/img/hot-deals/thumb/4.2x.jpg" alt="img">
                            </div>
                            <div class="col-md-6 mb-2 mb-md-0">
                                <h4 class="product-name">New Balance Running Arishi trainers in triple</h4>
                                <h5 class="price">$$29.00</h5>
                                <h6 class="color"><strong>Dimension: </strong>: <span class="dmc">40x60cm</span> </h6>
                                <h6 class="quantity"><strong>Quantity:</strong>&nbsp;1</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="modal-cart-content">
                            <p class="cart-products-count">There is 1 item in your cart.</p>
                            <p><strong>Total products:</strong>&nbsp;$123.72</p>
                            <p><strong>Total shipping:</strong>&nbsp;$7.00 </p>
                            <p><strong>Taxes</strong>&nbsp;$0.00</p>
                            <p><strong>Total:</strong>&nbsp;$130.72 (tax excl.)</p>
                            <div class="cart-content-btn">
                                <button type="button" class="btn theme-btn--dark3 btn--md mt-4"
                                    data-dismiss="modal">Continue
                                    shopping</button>
                                <button class="btn theme-btn--dark3 btn--md mt-4"><i
                                        class="ion-checkmark-round"></i>Proceed to
                                    checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modals end -->



    <!--*********************** 
        all js files
     ***********************-->

    <!--****************************************************** 
        jquery,modernizr ,poppe,bootstrap,plugins and main js
     ******************************************************-->

    <script src="{{url('frontend/js/vendor/jquery-3.5.1.min.js')}}"></script>
    <script src="{{url('frontend/js/vendor/modernizr-3.7.1.min.js')}}"></script>
    <script src="{{url('frontend/js/popper.min.js')}}"></script>
    <script src="{{url('frontend/js/plugins/jquery-ui.min.js')}}"></script>
    <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{url('frontend/js/plugins/plugins.js')}}"></script>
    <script src="{{url('frontend/js/main.js')}}"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!--*************************** 
          Minified  js 
     ***************************-->

    <!--*********************************** 
         vendor,plugins and main js
      ***********************************-->

    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    <script src="assets/js/main.js"></script> -->


</body>

</html>