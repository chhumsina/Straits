@section('title', ucfirst(Request::segment(1))))
@section('content')
    <?php
    $baseUrl = URL::to('/');
    ?>
    <br/>
    <div class="dividerHeading">
        <h4></h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="who">
                <div class="col-md-6" style="margin-left: -15px">
                    <div class="img-about">
                        <div class="swipe" id="slider" style="visibility: visible;">
                            <ul class="swipe-wrap" style="width: 1665px;">
                                <li style="width: 555px; left: 0px; transition-duration: 400ms; transform: translateX(-555px);" data-index="0"><img src="{{$baseUrl}}/assets/images/upload/{{$article->image}}" alt="{{$article->title}}" /></li>
                            </ul>
                            <div class="swipe-navi">
                                <div onclick="mySwipe.prev()" class="swipe-left"><i class="fa fa-chevron-left"></i></div>
                                <div onclick="mySwipe.next()" class="swipe-right"><i class="fa fa-chevron-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="dividerHeading">
                        <h4><span>{{$article->title}}</span></h4>

                    </div>
                    {{$article->description}}
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        @include('layouts.backendpartial.render-message')
        <!--begin isotope -->
        @if ($items->count())
            <div class="isotope">
            <?php $i = ($items->getCurrentPage() - 1)* $items->getPerPage(); ?>
                <!--begin portfolio_list -->
                <ul id="list" class="portfolio_list clearfix ">
                @foreach ($items as $item)
                        <!--begin List Item -->
                        <li class="list_item col-lg-12 col-md-12 mobile">
                            <div class="recent-item">
                                <figure class="portfolio_1 touching medium">
                                    <div class="pic">
                                        <img src="{{$baseUrl}}/assets/images/upload/{{ !empty($item->image)?$item->image:'sample.jpg' }}" alt="" />
                                        <div class="skin-overlay"></div>
                                        <a href="{{$baseUrl}}/assets/images/upload/{{$item->image}}" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    </div>

                                    <figcaption class="item-description">
                                        <h5><a href="{{$baseUrl}}/about-us/detail/{{$item->id}}" title="{{$item->title}}">{{$item->title}}</a></h5>
                                        <span><i class="fa fa-calendar"></i> &nbsp;&nbsp;{{date('d/M/Y H:m:s', strtotime($item->created_at))}} </span>
                                        <br/>
                                        <?php
                                            $string = strip_tags($item->description);

                                            if (strlen($string) > 400) {
                                                $stringCut = substr($string, 0, 400);
                                                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a href="'.$baseUrl.'/service/detail/'.$item->id.'" title="{{$item->title}}">Read More</a>';
                                            }
                                            echo $string;
                                        ?>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                @endforeach
                </ul>
            </div>
            <?php echo $items->links(); ?>
        @else
            There are no record!
        @endif
        </div>
        <!--end isotope -->
    </div> <!--./span12-->

@stop