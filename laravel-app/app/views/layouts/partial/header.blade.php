<!--Start Header-->
<?php
$baseUrl = URL::to('/');
?>
<div id="top-fix" class="clearfix">
    <header id="header" class="container">
        <div class="row">
            <div class="hidden-xs col-sm-7 top-info">
                <span><i class="fa fa-phone"></i>Phone: (123) 456-7890</span>
                <span><i class="fa fa-envelope"></i>Email: mail@example.com</span>
            </div>
            <div class="col-sm-5 top-info clearfix">
                <ul>
                    <li><a class="my-facebook" href=""><i class="fa fa-facebook"></i></a></li>
                    <li><a class="my-tweet" href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a class="my-pint" href=""><i class="fa fa-pinterest"></i></a></li>
                    <li><a class="my-rss" href=""><i class="fa fa-rss"></i></a></li>
                    <li><a class="my-skype" href=""><i class="fa fa-skype"></i></a></li>
                    <li><a class="my-google" href=""><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <!-- Logo / Mobile Menu -->
            <div id="logo-bar" class="col-sm-12 ">
                <div id="logo">
                    <h1><a href="{{$baseUrl}}"><img src="{{$baseUrl}}/assets/images/logo.png" alt="Rainy" /></a></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Navigation
            ================================================== -->
            <div class="navbar navbar-default navbar-static-top" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="home"><a href="{{$baseUrl}}">Home</a> </li>
                        <li class="about-us"><a href="{{$baseUrl}}/about-us">About Us</a></li>
                        <li class="latest-news"><a href="{{$baseUrl}}/latest-news">Latest News</a></li>
                        <li class="team-profile"><a href="{{$baseUrl}}/team-profile">Team Profile</a></li>
                        <li class="contact-us"><a href="{{$baseUrl}}/contact-us">Contat us</a></li>
                        <li class="map"><a href="{{$baseUrl}}/map">Map</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <!-- Container / End -->
    </header>

</div>
<!--End Header-->