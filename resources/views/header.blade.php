<!DOCTYPE html>
<html lang="zxx">



<head>
    <title>CaRent</title>
    <link rel="icon" href="{{asset('images/icon.png')}}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- CSS Files
    ================================================== -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet" type="text/css" id="mdb">
    <link href="{{asset('css/plugins.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/coloring.css')}}" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="{{asset('css/colors/scheme-01.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="wrapper">



        <!-- header begin -->
        <header class="transparent scroll-light has-topbar {{ Route::currentRouteName() === 'home' ? 'header-light' : '' }}">
            <div id="topbar" class="topbar-dark text-light">
                <div class="container">
                    <div class="topbar-left xs-hide">
                        <div class="topbar-widget">
                            <div class="topbar-widget"><a href="#"><i class="fa fa-phone"></i>+208 333 9296</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-envelope"></i>contact@rentaly.com</a></div>
                            <div class="topbar-widget"><a href="#"><i class="fa fa-clock-o"></i>Mon - Fri 08.00 - 18.00</a></div>
                        </div>
                    </div>

                    <div class="topbar-right">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa fa-youtube fa-lg"></i></a>
                            <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
                            <a href="#"><i class="fa fa-instagram fa-lg"></i></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="de-flex sm-pt10">
                            <div class="de-flex-col">
                                <div class="de-flex-col">
                                    <!-- logo begin -->
                                    <div id="logo">
                                        <a href="index.html">
                                            <img class="logo-1" src="{{asset('images/logo-light.png')}}" alt="">
                                            <img class="logo-2" src="{{asset('images/logo.png')}}" alt="">
                                        </a>
                                    </div>
                                    <!-- logo close -->
                                </div>
                            </div>
                            <div class="de-flex-col header-col-mid">
                                <ul id="mainmenu">
                                    <li><a class="menu-item" href="/">Home</a>

                                    </li>
                                    <li><a class="menu-item" href="{{route('cars')}}">Cars</a>

                                    </li>
                                    <li><a class="menu-item" href="booking.html">Booking</a></li>
                                    <li><a class="menu-item" href="account-dashboard.html">My Account</a>
                                        <ul>
                                            <li><a class="menu-item" href="account-dashboard.html">Dashboard</a></li>
                                            <li><a class="menu-item" href="account-profile.html">My Profile</a></li>
                                            <li><a class="menu-item" href="account-booking.html">My Orders</a></li>
                                            <li><a class="menu-item" href="account-favorite.html">My Favorite Cars</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="menu-item" href="#">Pages</a>
                                        <ul>
                                            <li><a class="menu-item" href="about.html">About Us</a></li>
                                            <li><a class="menu-item" href="contact.html">Contact</a></li>
                                            <li><a class="menu-item" href="login.html">Login</a></li>
                                            <li><a class="menu-item" href="register.html">Register</a></li>
                                            <li><a class="menu-item" href="404.html">Page 404</a></li>
                                        </ul>
                                    </li>


                                </ul>
                            </div>
                            <div class="de-flex-col">
                                <div class="menu_side_area">
                                    @if(Auth::check())
                                    <div class="btn-group">
                                        <a href="{{ route('userdashboard') }}" class="btn-main" style="margin-right: 8px;">Dashboard</a>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn-main">Logout</button>
                                        </form>
                                    </div>
                                    @else
                                    <a href="{{ route('login') }}" class="btn-main">Login</a>
                                    <a href="{{ route('register') }}" class="btn-main">Signup</a>
                                    @endif
                                    
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
    </div>
    
    </header>
    <div class="no-bottom no-top" id="content">
    <div id="top"></div>
    @yield('content')
    </div>
    <a href="#" id="back-to-top"></a>
    @include('footer')



</html>