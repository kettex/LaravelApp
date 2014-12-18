<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 09.12.2014
 * Time: 21:46
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Menübuchung</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/templatemo_style.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/templatemo_misc.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/flexslider.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/testimonails-slider.css') }}"/>

    <script src="{{ URL::asset('js/vendor/modernizr-2.6.1-respond-1.1.0.min.js') }}"></script>

</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser
    today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better
    experience this site.</p>
<![endif]-->

<header>
    <div id="top-header">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-md-offset-6" style="text-align: right;">
                    <div class="home-account">
                        <a href="{{URL::to('/')}}">Home</a>
                        <a href="{{URL::to('login')}}">My account</a>
                        <a href="{{URL::to('register')}}">Register</a>
                    </div>
                </div>
                {{--<div class="col-md-6">
                    <div class="cart-info">
                        <i class="fa fa-shopping-cart"></i>
                        (<a href="#">5 items</a>) in your cart (<a href="#">$45.80</a>)
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
    <div id="main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    {{--<div class="logo">
                        <a href="#"><img src="{{URL::asset('images/logo.png')}}" title="Logo"
                                         alt="Logo"></a>
                    </div>--}}
                </div>
                <div class="col-md-6">
                    <div class="main-menu">
                        <ul>
                            <li><a href="{{URL::to('/')}}">Home</a></li>
                            <a href="{{ URL::to('about/index') }}">About</a>
                            <li><a href="{{URL::to('products/index')}}">Products</a></li>
                            <li><a href="{{URL::to('contact/index')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="search-box">
                        <form name="search_form" method="get" class="search_form">
                            <input id="search" type="text"/>
                            <input type="submit" id="search-button"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('content')
<footer>
    <div class="container">
        <div class="top-footer">
            <div class="row">
                <div class="col-md-9">

                </div>
                <div class="col-md-3">
                    <div class="social-bottom">
                        <span>Follow us:</span>
                        <ul>
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-footer">
            <div class="row">
                <div class="col-md-3">
                    <div class="about">
                        <h4 class="footer-title">Impressum</h4>
                        <p>Sed egestas tincidunt mollis. <span class="blue"></span><span class="green"></span> Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus.
                            <br><br>Sed egestas tincidunt mollis.Sed egestas tincidunt mollis. Suspendisse rhoncus vitae enim et faucibus.</p>
                    </div>
                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">

                </div>
                <div class="col-md-3">
                    <div class="more-info">
                        <h4 class="footer-title">More info</h4>
                        <p>Sed dignissim, diam id molestie faucibus, purus nisl pretium quam, in pulvinar velit massa id elit.</p>
                        <ul>
                            <li><i class="fa fa-phone"></i>010-020-0340</li>
                            <li><i class="fa fa-globe"></i>Universitätstrasse 1, 9020 Klagenfurt</li>
                            <li><i class="fa fa-envelope"></i><a href="#">info@companyname.at</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <p>Copyright © 2014 <a href="#">Kettl | Spendl</a>  </p>
        </div>

    </div>
</footer>


<script src="{{ URL::asset('js/vendor/jquery-1.11.0.min.js') }}"></script>
<script src="{{ URL::asset('js/vendor/jquery.gmap3.min.js') }}"></script>
<script src="{{ URL::asset('js/plugins.js') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>

</body>
</html>
