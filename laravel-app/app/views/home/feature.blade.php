@section('title', 'Feature')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="blog_large">
                <article class="post">
                    <figure class="post_img">
                        <!-- Post Image Slider -->
                        <div id="slider" class="swipe">
                            <ul class="swipe-wrap">
                                <li><img src="images/blog/blog_2.png" alt="blog post"></li>
                                <li><img src="images/blog/blog_1.png" alt="blog post"></li>
                                <li><img src="images/blog/blog_3.png" alt="blog post"></li>
                            </ul>
                            <div class="swipe-navi">
                                <div class="swipe-left" onclick="mySwipe.prev()"><i class="fa fa-chevron-left"></i></div>
                                <div class="swipe-right" onclick="mySwipe.next()"><i class="fa fa-chevron-right"></i></div>
                            </div>
                        </div>
                    </figure>
                    <div class="post_date">
                        <span class="day">28</span>
                        <span class="month">Nov</span>
                    </div>
                    <div class="post_content">
                        <div class="post_meta">
                            <h2>
                                <a href="#">perferendis doloribus asperiores ut labore</a>
                            </h2>
                            <div class="metaInfo">
                                <span><i class="fa fa-calendar"></i> <a href="#">Nov 28, 2014</a> </span>
                                <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                            </div>
                        </div>
                        <p>Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum. Donec in ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo ad gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis sum dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, po anemat ornare nec, elementum sit amet felis. Maecenas pretium hendrerit fermentum lacus sapien, placerat a ornare nec fringilla libero convals.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt  ut aut reiciendise voluptat maiores alias consequaturs aut perferendis doloribus asperiores ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                        <blockquote class="default">
                            Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque eget tempor tellus. Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum.
                        </blockquote>

                        <p>Fusce lacinia tempor malesuada. Ut lacus sapien, placerat a ornare nec, elementum sit amet felis. Maecenas pretium lorem hendrerit eros sagittis fermentum. Donec in ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo ad gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis sum dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada. Ut lacus sapien, po anemat ornare nec, elementum sit amet felis. Maecenas pretium hendrerit fermentum lacus sapien, placerat a ornare nec fringilla libero convals.</p>

                        <p>Donec in ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. Cras suscipit, quam vitae adipiscing faucibus, risus nibh laoreet odio, a porttitor metus eros ut enim. Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu duiport titor metus eros ut enim. </p>
                    </div>
                    <ul class="shares">
                        <li class="shareslabel"><h3>Share This Story</h3></li>
                        <li><a class="twitter" href="#" data-placement="bottom" data-toggle="tooltip" title="Twitter"></a></li>
                        <li><a class="facebook" href="#" data-placement="bottom" data-toggle="tooltip" title="Facebook"></a></li>
                        <li><a class="gplus" href="#" data-placement="bottom" data-toggle="tooltip" title="Google Plus"></a></li>
                        <li><a class="pinterest" href="#" data-placement="bottom" data-toggle="tooltip" title="Pinterest"></a></li>
                        <li><a class="yahoo" href="#" data-placement="bottom" data-toggle="tooltip" title="Yahoo"></a></li>
                        <li><a class="linkedin" href="#" data-placement="bottom" data-toggle="tooltip" title="LinkedIn"></a></li>
                    </ul>
                </article>
            </div>
        </div>

        <!--Sidebar Widget-->
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="sidebar">
                <div class="widget widget_search">
                    <div class="site-search-area">
                        <form action="#" id="site-searchform" method="get">
                            <div>
                                <input type="text" placeholder="Enter Search keywords..." id="s" name="s" class="input-text">
                                <input type="submit" value="Search" id="searchsubmit">
                            </div>
                        </form>
                    </div><!-- end site search -->
                </div>

                <div class="widget widget_categories">
                    <div class="widget_title">
                        <h4><span>Categories</span></h4>
                    </div>
                    <ul class="arrows_list list_style">
                        <li><a href="#">Graphic Design (10)</a></li>
                        <li><a href="#">Web Design &amp; Development (25)</a></li>
                        <li><a href="#">Photography (29)</a></li>
                        <li><a href="#">Custom Illustrations (19)</a></li>
                        <li><a href="#">Wordpress Themes(38)</a></li>
                        <li><a href="#">Videography (33)</a></li>
                    </ul>
                </div>

                <div class="widget widget_about">
                    <div class="widget_title">
                        <h4><span>Basic Text Widget</span></h4>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>

                <div class="widget widget_tab">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#Popular">Popular</a></li>
                        <li class=""><a data-toggle="tab" href="#Recent">Recent</a></li>
                        <li class="last-tab"><a data-toggle="tab" href="#Recent-Comment"><i class="fa fa-comments-o"></i></a></li>
                    </ul>

                    <div class="tab-content clearfix">
                        <div id="Popular" class="tab-pane fade active in">
                            <ul class="recent_tab_list">
                                <li>
                                    <span><a href="#"><img alt="" src="images/content/recent_1.png"></a></span>
                                    <a href="#">Publishing packag esanse web page editos</a>
                                    <i>June 03, 2014</i>
                                </li>
                                <li>
                                    <span><a href="#"><img alt="" src="images/content/recent_2.png"></a></span>
                                    <a href="#">Sublishing packag esanse web page editos</a>
                                    <i>June 02, 2014</i>
                                </li>
                                <li class="last-tab">
                                    <span><a href="#"><img alt="" src="images/content/recent_3.png"></a></span>
                                    <a href="#">Mublishing packag esanse web page editos</a>
                                    <i>June 01, 2014</i>
                                </li>
                            </ul>
                        </div>
                        <div id="Recent" class="tab-pane fade">
                            <ul class="recent_tab_list">
                                <li>
                                    <span><a href="#"><img alt="" src="images/content/recent_4.png"></a></span>
                                    <a href="#">Various versions has evolved over the years</a>
                                    <i>July 03, 2014</i>
                                </li>
                                <li>
                                    <span><a href="#"><img alt="" src="images/content/recent_5.png"></a></span>
                                    <a href="#">Rarious versions has evolve over the years</a>
                                    <i>July 02, 2014</i>
                                </li>
                                <li class="last-tab">
                                    <span><a href="#"><img alt="" src="images/content/recent_6.png"></a></span>
                                    <a href="#">Marious versions has evolven over the years</a>
                                    <i>July 01, 2014</i>
                                </li>
                            </ul>
                        </div>
                        <div id="Recent-Comment" class="tab-pane fade">
                            <ul class="comments">
                                <li class="comments_list">
                                    <a href="#" class="post-thumbnail"><img width="60" height="60" alt="#" src="images/content/recent_3.png"></a>
                                    <p><strong><a href="#">LaraDut</a> <i>says: </i> </strong> Morbi augue velit, tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada.</p>
                                </li>
                                <li class="comments_list">
                                    <a href="#" class="post-thumbnail"><img width="60" height="60" alt="#" src="images/content/recent_1.png"></a>
                                    <p><strong><a href="#">Ronny</a> <i>says: </i> </strong> Tempus mattis dignissim nec, porta sed risus. Donec eget magna eu lorem tristique pellentesque eget eu dui. Fusce lacinia tempor malesuada.</p>
                                </li>
                                <li class="comments_list">
                                    <a href="#" class="post-thumbnail"><img width="60" height="60" alt="#" src="images/content/recent_2.png"></a>
                                    <p><strong><a href="#">Steve</a> <i>says: </i> </strong> Donec convallis, metus nec tempus aliquet, nunc metus adipiscing leo, a lobortis nisi dui ut odio. Nullam ultrices, eros accumsan vulputate faucibus, turpis tortor.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="widget widget_tags">
                    <div class="widget_title">
                        <h4><span>Tags Widget</span></h4>
                    </div>

                    <ul class="tags">
                        <li><a href="#"><b>business</b></a></li>
                        <li><a href="#">corporate</a></li>
                        <li><a href="#">css3</a></li>
                        <li><a href="#"><b>html5</b></a></li>
                        <li><a href="#">javascript</a></li>
                        <li><a href="#"><b>jquery</b></a></li>
                        <li><a href="#">multipurpose</a></li>
                        <li><a href="#"><b>mysql</b></a></li>
                        <li><a href="#">portfolio</a></li>
                        <li><a href="#">premium</a></li>
                        <li><a href="#">responsive</a></li>
                        <li><a href="#"><b>theme</b></a></li>
                        <li><a href="#"><b>jqueryrain</b></a></li>
                    </ul>
                </div>

                <div class="widget widget_archives">
                    <div class="widget_title">
                        <h4><span>Archives</span></h4>
                    </div>
                    <ul class="archives_list list_style">
                        <li><a href="#">July 2014</a></li>
                        <li><a href="#">June 2014</a></li>
                        <li><a href="#">May 2014</a></li>
                        <li><a href="#">April 2014</a></li>
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--/.row-->
@stop