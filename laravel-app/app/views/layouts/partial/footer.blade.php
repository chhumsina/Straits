<?php
$baseUrl = URL::to('/');
?>
<!--start footer-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-4">
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
            <div class="col-sm-6 col-md-4 col-lg-4">
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
            <div class="col-sm-6 col-md-4 col-lg-4">
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
        </div>
    </div>
</footer>
<!--end footer-->

<section class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="copyright">{{$other->footer}}</p>
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
<script type="text/javascript" src="{{$baseUrl}}/assets/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="{{$baseUrl}}/assets/js/swipe.js"></script>
<script type="text/javascript" src="{{$baseUrl}}/assets/js/slideshow.js"></script>
<script type="text/javascript" src="{{$baseUrl}}/assets/plugin/card/jquery.flipout_cards.js"></script>

@if(Request::segment(2) == 'map')
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="{{$baseUrl}}/assets/plugin/map/js/googleMapApi.js"></script>
@endif

<?php
 $url = Request::segment(1);
    if(empty($url)){
        $url = 'home';
    }
?>

<script src="{{$baseUrl}}/assets/js/main.js"></script>
<script>
    $(document).ready(function(){
        $('.<?php echo $url;?>').addClass('active');

        $(".flipout").flipout_cards();

        setInterval(function(){$(".flipout").trigger('mouseleave'); }, 10000);
        setInterval(function(){$(".flipout").trigger('mouseenter'); }, 3000);

    });

    /*
     * Author:      Marco Kuiper (http://www.marcofolio.net/)
     */

    // Speed of the automatic slideshow
    var slideshowSpeed = 6000;

    // Variable to store the images we need to set as background
    // which also includes some text and url's.
    var photos = [ {
        "image" : "1.png"
    }, {
        "image" : "2.png"
    }, {
        "image" : "3.png"
    }
    ];



    $(document).ready(function() {

        // Backwards navigation
        $("#back").click(function() {
            stopAnimation();
            navigate("back");
        });

        // Forward navigation
        $("#next").click(function() {
            stopAnimation();
            navigate("next");
        });

        var interval;
        $("#control").toggle(function(){
            stopAnimation();
        }, function() {
            // Change the background image to "pause"
            $(this).css({ "background-image" : "url(images/btn_pause.png)" });

            // Show the next image
            navigate("next");

            // Start playing the animation
            interval = setInterval(function() {
                navigate("next");
            }, slideshowSpeed);
        });


        var activeContainer = 1;
        var currentImg = 0;
        var animating = false;
        var navigate = function(direction) {
            // Check if no animation is running. If it is, prevent the action
            if(animating) {
                return;
            }

            // Check which current image we need to show
            if(direction == "next") {
                currentImg++;
                if(currentImg == photos.length + 1) {
                    currentImg = 1;
                }
            } else {
                currentImg--;
                if(currentImg == 0) {
                    currentImg = photos.length;
                }
            }

            // Check which container we need to use
            var currentContainer = activeContainer;
            if(activeContainer == 1) {
                activeContainer = 2;
            } else {
                activeContainer = 1;
            }

            showImage(photos[currentImg - 1], currentContainer, activeContainer);

        };

        var currentZindex = -1;
        var showImage = function(photoObject, currentContainer, activeContainer) {
            animating = true;

            // Make sure the new container is always on the background
            currentZindex--;

            // Set the background image of the new active container
            $("#headerimg" + activeContainer).css({
                "background-image" : "url({{$baseUrl}}/assets/images/banner/" + photoObject.image + ")",
                "display" : "block",
                "background-size" : "100% 400px",
                "z-index" : currentZindex
            });

            // Hide the header text
            $("#headertxt").css({"display" : "none"});

            // Set the new header text
            $("#firstline").html(photoObject.firstline);
            $("#secondline")
                    .attr("href", photoObject.url)
                    .html(photoObject.secondline);
            $("#pictureduri")
                    .attr("href", photoObject.url)
                    .html(photoObject.title);


            // Fade out the current container
            // and display the header text when animation is complete
            $("#headerimg" + currentContainer).fadeOut(function() {
                setTimeout(function() {
                    $("#headertxt").css({"display" : "block"});
                    animating = false;
                }, 500);
            });
        };

        var stopAnimation = function() {
            // Change the background image to "play"
            //$("#control").css({ "background-image" : "url({{$baseUrl}}}/assets/images/btn_play.png)" });

            // Clear the interval
            clearInterval(interval);
        };

        // We should statically set the first image
        navigate("next");

        // Start playing the animation
        interval = setInterval(function() {
            navigate("next");
        }, slideshowSpeed);

    });

</script>
</body>
</html>