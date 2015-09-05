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
                        <h3>Rainy is awesome responsive template, with refreshingly clean design.</h3>
                        <p>Lorem ipsum dolor sit amet, cons adipiscing elit. Aenean commodo ligula eget dolor. </p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="pb_action">
                        <a class="btn btn-lg btn-default" href="#fakelink">
                            <i class="fa fa-shopping-cart"></i>
                            Download Now
                        </a>
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

    <section class="latest_work">
        <div class="container">
            <div class="row sub_content">
                <div class="carousel-intro">
                    <div class="col-md-12">
                        <div class="dividerHeading">
                            <h4><span>Latest News</span></h4>
                        </div>
                        <div class="carousel-navi">
                            <div id="work-prev" class="arrow-left jcarousel-prev"><i class="fa fa-angle-left"></i></div>
                            <div id="work-next" class="arrow-right jcarousel-next"><i class="fa fa-angle-right"></i></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="jcarousel recent-work-jc">
                    <ul class="jcarousel-list">
                        <!-- Recent Work Item -->
                        <li class="col-sm-12 col-md-3 col-lg-3">
                            <div class="recent-item">
                                <figure class="touching medium">
                                    <div class="pic">
                                        <img src="images/portfolio/portfolio_1.png" alt="" />
                                    </div>
                                    <div class="skin-overlay"></div>
                                    <a href="images/portfolio/full/portfolio_1.png" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link">
                                        <i class="fa fa-link"></i>
                                    </a>
                                    <figcaption class="item-description">
                                        <h5>Lorem ipsum</h5>
                                        <span>Technology</span>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>

                        <!-- Recent Work Item -->
                        <li class="col-sm-12 col-md-3 col-lg-3">
                            <div class="recent-item">
                                <figure class="touching medium">
                                    <div class="pic">
                                        <img src="images/portfolio/portfolio_2.png" alt="" />
                                    </div>
                                    <div class="skin-overlay"></div>
                                    <a href="images/portfolio/full/portfolio_2.png" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                    <figcaption class="item-description">
                                        <h5>Dolorsit</h5>
                                        <span>Technology</span>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>

                        <!-- Recent Work Item -->
                        <li class="col-sm-12 col-md-3 col-lg-3">
                            <div class="recent-item">
                                <figure class="touching medium">
                                    <div class="pic">
                                        <img src="images/portfolio/portfolio_3.png" alt="" />
                                    </div>
                                    <div class="skin-overlay"></div>
                                    <a href="images/portfolio/full/portfolio_3.png" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                    <figcaption class="item-description">
                                        <h5>Working in Shop</h5>
                                        <span>Photography</span>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>

                        <!-- Recent Work Item -->
                        <li class="col-sm-12 col-md-3 col-lg-3">
                            <div class="recent-item">
                                <figure class="touching medium">
                                    <div class="pic">
                                        <img src="images/portfolio/portfolio_4.png" alt="" />
                                    </div>
                                    <div class="skin-overlay"></div>
                                    <a href="images/portfolio/full/portfolio_4.png" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                    <figcaption class="item-description">
                                        <h5>Sailing</h5>
                                        <span>Photography</span>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>

                        <!-- Recent Work Item -->
                        <li class="col-sm-12 col-md-3 col-lg-3">
                            <div class="recent-item">
                                <figure class="touching medium">
                                    <div class="pic">
                                        <img src="images/portfolio/portfolio_5.png" alt="" />
                                    </div>
                                    <div class="skin-overlay"></div>
                                    <a href="images/portfolio/full/portfolio_5.png" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                    <figcaption class="item-description">
                                        <h5>House</h5>
                                        <span>Architecture</span>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>

                        <!-- Recent Work Item -->
                        <li class="col-sm-12 col-md-3 col-lg-3">
                            <div class="recent-item">
                                <figure class="touching medium">
                                    <div class="pic">
                                        <img src="images/portfolio/portfolio_1.png" alt="" />
                                    </div>
                                    <div class="skin-overlay"></div>
                                    <a href="images/portfolio/full/portfolio_3.png" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                    <figcaption class="item-description">
                                        <h5>Nevide</h5>
                                        <span>Motion</span>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>

                        <!-- Recent Work Item -->
                        <li class="col-sm-12 col-md-3 col-lg-3">
                            <div class="recent-item">
                                <figure class="touching medium">
                                    <div class="pic">
                                        <img src="images/portfolio/portfolio_2.png" alt="" />
                                    </div>
                                    <div class="skin-overlay"></div>
                                    <a href="images/portfolio/full/portfolio_2.png" class="hover-zoom mfp-image"><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                    <figcaption class="item-description">
                                        <h5>Sunrise</h5>
                                        <span>Photography</span>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>

                        <!-- Recent Work Item -->
                        <li class="col-sm-12 col-md-3 col-lg-3">
                            <div class="recent-item">
                                <figure class="touching medium">
                                    <div class="pic">
                                        <img src="images/portfolio/portfolio_3.png" alt="" />
                                    </div>
                                    <div class="skin-overlay"></div>
                                    <a href="images/portfolio/full/portfolio_3.png" class="hover-zoom mfp-image"><i class="fa fa-search"></i></a>
                                    <a href="portfolio_single.html" class="hover-link"><i class="fa fa-link"></i></a>
                                    <figcaption class="item-description">
                                        <h5>Vena Branding</h5>
                                        <span>Identity</span>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</section>
<!--end wrapper-->

  	@include('layouts.partial.footer')
</body>
</html>