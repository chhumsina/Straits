<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
@include('layouts.partial.head')
<body class="home">

<?php
$baseUrl = URL::to('/');
?>

<div id="rainy-container">
    <?php
        $other = Other::first();
    ?>
        <div id="header">

            <!-- jQuery handles to place the header background images -->
            <div id="headerimgs">
                <div id="headerimg1" class="headerimg"></div>
                <div id="headerimg2" class="headerimg"></div>
            </div>

            <!-- Top navigation on top of the images -->
            <div id="nav-outer">
                <div id="navigation">
                    <!-- Stuff in the navigation bar goes here -->
                </div>
            </div>

            <!-- Slideshow controls -->
            <div id="headernav-outer">
                <div id="headernav">
                    <div id="back" class="btn"></div>
                    <div id="control" class="btn"></div>
                    <div id="next" class="btn"></div>
                </div>
            </div>

            <!-- jQuery handles for the text displayed on top of the images -->
            <!--<div id="headertxt">
                <p class="caption">
                    <span id="firstline"></span>
                    <a href="#" id="secondline"></a>
                </p>
                <p class="pictured">
                    Pictured:
                    <a href="#" id="pictureduri"></a>
                </p>
            </div>
            -->

        </div>
</div>
  	@include('layouts.partial.header')

<!-- flatout

<div class="flipout">
    <div class="foc-main">
        <img src="{{$baseUrl}}/assets/images/world.png" class="main-image">
    </div>

    <div class="foc-right">
        <img src="{{$baseUrl}}/assets/images/airplane.png" class="main-air" style="width:300px; margin-left: -37px; margin-top: -5px; ">
    </div>
    <div class="foc-right">
        <img src="{{$baseUrl}}/assets/images/ship.png" class="main-air" style=" margin-left: 175px;margin-top: 55px;width: 164px;">
    </div>
    <div class="foc-right">
        <img src="{{$baseUrl}}/assets/images/truck.png" class="main-air" style=" margin-left: 244px;margin-top: 59px;width: 349px;">
    </div>
</div>
 end flatout -->
<!--start wrapper-->
<section class="wrapper">
    <section class="promo_box">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="promo_content">
                        <h3>{{$other->welcome}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--start info service-->
    <section class="info_service">
        <div class="container">
            @include('layouts.partial.content')
        </div>
    </section>
    <!--end info service-->
    @include('layouts.partial.latest-news')
</section>
<!--end wrapper-->

  	@include('layouts.partial.footer')
</body>
</html>