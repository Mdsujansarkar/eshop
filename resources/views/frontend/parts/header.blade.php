<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title><?php config('app.name') ?></title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="{{asset('frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="{{asset('frontend/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="{{asset('frontend/js/jquery-1.11.1.min.js')}}"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{asset('frontend/js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
    <!-- header -->
    <div class="agileits_header">
        <div class="container">
            <div class="w3l_offers">
                <p>SALE UP TO 70% OFF. USE CODE "SALE70%" . <a href="{{ url('/')}}">SHOP NOW</a></p>
            </div>
            <div class="agile-login">
                <ul>
                    <li><a href="{{route('new-customer-login')}}"> Create Account </a></li>
                        @if(Session::get('customrId'))
                    <li><a href="#" onclick="document.getElementById('customerLogotFrom').submit(); " >Logout</a></li>
                    <form id="customerLogotFrom"  action="{{route('customer-logout')}}" method="post">
                        @csrf

                    </form>
                        @endif
                    <li><a href="{{route('new-customer-login')}}">Login</a></li>

                </ul>
            </div>
            <div class="product_list_header">
                <a href="{{route('add-to-show')}}" style="color:#FFFFFF; font-size:18px"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="logo_products">
        <div class="container">
            <div class="w3ls_logo_products_left1">
                <ul class="phone_email">
                    <li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 567</li>

                </ul>
            </div>
            <div class="w3ls_logo_products_left">
                <h1><a href="{{ url('/')}}">super Market</a></h1>
            </div>
            <div class="w3l_search">

                <form action="{{route('product-search')}}" method="get">
                  @csrf
                    <input type="search" name="q" placeholder="Search for a Product..." required="">
                    <button type="submit" class="btn btn-default search" aria-label="Left Align">
                        <i class="fa fa-search" aria-hidden="true"> </i>
                    </button>
                    <div class="clearfix"></div>
                </form>

            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //header -->
