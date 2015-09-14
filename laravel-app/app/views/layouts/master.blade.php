<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" class="no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
@include('layouts.partial.head')
<body class="home">
<div id="rainy-container">
    <img id="background" alt="background" class="background" src="assets/images/head-3.png"/>
</div>
<?php
$baseUrl = URL::to('/');
?>
  	@include('layouts.partial.header')

<!--start wrapper-->
<section class="wrapper">
    <section class="promo_box">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="promo_content">
                        <h3>WELCOME TO STRAITS INTERNATIONAL PTE., LTD</h3>
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