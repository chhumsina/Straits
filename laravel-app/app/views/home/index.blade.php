@section('title', 'Detail Dealer')
@section('content')
    <?php
    $baseUrl = URL::to('/');
    ?>
    <div class="row sub_content">
        <div class="col-md-12">
            <div class="dividerHeading">
                <h4><span>Our Services</span></h4>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4​​​">
            <div class="serviceBox_2">
                <div class="hover-icon new-effect">
                    <i class="service-2-icon hover-icon-images fa fa-bell"></i>
                </div>
                <h3>Shipping Agency</h3>
                <ul class="text-left-custom arrows_list list_style">
                    @foreach($shipping_agency as $k => $item)
                        @if($k == 3)
                            <div class="moreagency">See more...</div>
                        @endif
                        <li><a href="{{$baseUrl}}/service/detail/{{$item->slug}}" title="{{$item->title}}">{{$item->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="serviceBox_2">
                <div class="hover-icon new-effect">
                    <i class="service-2-icon hover-icon-images fa fa-bell"></i>
                </div>
                <h3>Freight Forwarding</h3>
                <ul class="text-left-custom arrows_list list_style">
                    @foreach($freight_forwarding as $k => $item)
                        @if($k == 3)
                            <div class="moreforwarding">See more...</div>
                        @endif
                        <li><a href="{{$baseUrl}}/service/detail/{{$item->id}}" title="{{$item->title}}">{{$item->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
            <div class="serviceBox_2">
                <div class="hover-icon new-effect">
                    <i class="service-2-icon hover-icon-images fa fa-bell"></i>
                </div>
                <h3>Other Service</h3>
                <ul class="text-left-custom arrows_list list_style">
                    @foreach($other_services as $k=> $item)
                        @if($k == 3)
                            <div class="moreother">See more...</div>
                        @endif
                        <li><a href="{{$baseUrl}}/service/detail/{{$item->slug}}" title="{{$item->title}}">{{$item->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>



    <div class="row sub_content">
        <div class="col-lg-8 col-md-8 col-sm-8">
            <div class="dividerHeading">
                <h4><span>About Us</span></h4>
            </div>
            <div class="row">
                @foreach($about as $item)
                    <div class="col-md-6 rec_blog">
                        <div class="blogPic">
                            <img src="{{$baseUrl}}/assets/images/upload/{{$item->image}}" title="{{$item->image}}" alt="{{$item->image}}"/>
                        </div>
                        <div class="blogDetail">
                            <div class="blogTitle">
                                <a href="{{$baseUrl}}/about-us/detail/{{$item->slug}}" title="{{$item->title}}"><h2>{{$item->title}}</h2></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- TESTIMONIALS -->
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="dividerHeading">
                <h4><span>What Client's Say</span></h4>

            </div>
            <div id="testimonial-carousel" class="testimonial carousel slide">
                <div class="carousel-inner">
                    <div class="active item">
                        <div class="testimonial-item">
                            <div class="icon"><i class="fa fa-quote-right"></i></div>
                            <blockquote>
                                <p>Donec convallis, metus nec tempus aliquet, nunc metus adipiscing leo, a lobortis nisi dui ut odio. Nullam ultrices, eros accumsan vulputate faucibus, turpis tortor dictum phasellus ac libero. </p>
                            </blockquote>
                            <div class="icon-tr"></div>
                            <div class="testimonial-review">
                                <img src="images/testimonials/1.png" alt="testimoni">
                                <h1>Jonathan Dower,<small>Company Inc.</small></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-buttons"><a href="#testimonial-carousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>&#32;
                    <a href="#testimonial-carousel" data-slide="next"><i class="fa fa-chevron-right"></i></a></div>
            </div>
        </div><!-- TESTIMONIALS END -->
    </div>

@stop