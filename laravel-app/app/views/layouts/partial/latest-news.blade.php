<?php
$baseUrl = URL::to('/');
?>
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
                    @foreach($news as $item)
                        <!-- Recent Work Item -->
                        <li class="col-sm-12 col-md-3 col-lg-3">
                            <div class="recent-item">
                                <figure class="touching medium">
                                    <div class="pic">
                                        <a href="{{$baseUrl}}/latest-news/detail/{{$item->slug}}" title="{{$item->title}}"><img src="{{$baseUrl}}/assets/images/upload/{{ !empty($item->image)?$item->image:'sample.jpg' }}" title="{{$item->title}}" alt="{{$item->title}}" /></a>
                                    </div>
                                    <figcaption class="item-description">
                                        <h5><a href="{{$baseUrl}}/latest-news/detail/{{$item->slug}}" title="{{$item->title}}">{{$item->title}}</a></h5>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>