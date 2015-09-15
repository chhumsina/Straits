<?php
$baseUrl = URL::to('/');
?>
<!--start footer-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="widget_title">
                    <h4><span>About Us</span></h4>
                </div>
                <div class="widget_content">
                    <p>Donec earum rerum hic tenetur ans sapiente delectus, ut aut reiciendise voluptat maiores alias consequaturs aut perferendis.</p>
                    <ul class="contact-details-alt">
                        <li><i class="fa fa-map-marker"></i> <p><strong>Address</strong>:#2021</p></li>
                        <li><i class="fa fa-user"></i> <p><strong>Phone</strong>:(+91) 7696263851</p></li>
                        <li><i class="fa fa-envelope"></i> <p><strong>Email</strong>: <a href="#">mail@example.com</a></p></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="widget_title">
                    <h4><span>Recent Posts</span></h4>
                </div>
                <div class="widget_content">
                    <ul class="links">
                        <li><a href="#">Aenean commodo ligula eget dolor<span>November 07, 2014</span></a></li>
                        <li><a href="#">Temporibus autem quibusdam <span>November 05, 2014</span></a></li>
                        <li><a href="#">Debitis aut rerum saepe <span>November 03, 2014</span></a></li>
                        <li><a href="#">Et voluptates repudiandae <span>November 02, 2014</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="widget_title">
                    <h4><span>Twitter</span></h4>

                </div>
                <div class="widget_content">
                    <ul class="tweet_list">
                        <li class="tweet_content item">
                            <p class="tweet_link"><a href="#">@jquery_rain </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                            <span class="time">29 September 2014</span>
                        </li>
                        <li class="tweet_content item">
                            <p class="tweet_link"><a href="#">@jquery_rain </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                            <span class="time">29 September 2014</span>
                        </li>
                        <li class="tweet_content item">
                            <p class="tweet_link"><a href="#">@jquery_rain </a> Lorem ipsum dolor et, consectetur adipiscing eli</p>
                            <span class="time">29 September 2014</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="widget_title">
                    <h4><span>Flickr Gallery</span></h4>

                </div>
                <div class="widget_content">
                    <div class="flickr">
                        <ul id="flickrFeed" class="flickr-feed"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--end footer-->

<section class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="copyright">&copy; Copyright 2014 jQuery Rain | Powered by  <a href="http://jQueryrain.com/"> jQuery Rain</a></p>
            </div>

            <div class="col-md-6">
                <div class="footer_social">
                    <ul class="footbot_social">
                        <li><a class="fb" href="#." data-placement="top" data-toggle="tooltip" title="Facbook"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twtr" href="#." data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#." data-placement="top" data-toggle="tooltip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="skype" href="#." data-placement="top" data-toggle="tooltip" title="Skype"><i class="fa fa-skype"></i></a></li>
                        <li><a class="rss" href="#." data-placement="top" data-toggle="tooltip" title="RSS"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="{{$baseUrl}}/assets/js/jquery-1.10.2.min.js"></script>
<script src="{{$baseUrl}}/assets/js/bootstrap.js"></script>
<script src="{{$baseUrl}}/assets/js/jquery.easing.1.3.js"></script>
<script src="{{$baseUrl}}/assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="{{$baseUrl}}/assets/js/jquery.cookie.js"></script> <!-- jQuery cookie -->
<script type="text/javascript" src="{{$baseUrl}}/assets/js/styleswitch.js"></script> <!-- Style Colors Switcher -->
<script src="{{$baseUrl}}/assets/js/jquery.smartmenus.min.js"></script>
<script src="{{$baseUrl}}/assets/js/jquery.smartmenus.bootstrap.min.js"></script>
<script src="{{$baseUrl}}/assets/js/jquery-scrolltofixed-min.js"></script>
<script charset="utf-8" type="text/javascript" src="{{$baseUrl}}/assets/js/jquery.fractionslider.js"></script>
<script type="text/javascript" src="{{$baseUrl}}/assets/js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="{{$baseUrl}}/assets/js/jflickrfeed.js"></script>
<script type="text/javascript" src="{{$baseUrl}}/assets/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="{{$baseUrl}}/assets/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="{{$baseUrl}}/assets/js/swipe.js"></script>
<script type="text/javascript" src="{{$baseUrl}}/assets/js/rainyday.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="{{$baseUrl}}/assets/plugin/map/js/googleMapApi.js"></script>
<script src="{{$baseUrl}}/assets/js/main.js"></script>
<script>
    $(window).load(function(){
        $('.slider').fractionSlider({
            'fullWidth': 			true,
            'controls': 			true,
            'responsive': 			true,
            'dimensions': 			"1920,335",
            'increase': 			true,
            'pauseOnHover': 		true,
            'slideEndAnimation': 	true,
            'autoChange':           true
        });
    });

    /*                              Rainy-day
     /*----------------------------------------------------------------*/
    function run() {
        var image = document.getElementById('background');
        image.onload = function() {
            var engine = new RainyDay({
                element: image,
                image: this
            });
            engine.trail = engine.TRAIL_SMUDGE;
            //            engine.rain([ [1, 0, 30], [1, 2, 2] ],600);
            engine.rain([ [0, 2, 200], [3, 3, 1] ], 100);
        };
        image.crossOrigin = 'anonymous';
        image.src = 'assets/images/head-3.png';
    }
    window.onload = function() {
        run();
    };
</script>
</body>
</html>