@section('title', ucfirst(Request::segment(1))))
@section('content')
    <?php
    $baseUrl = URL::to('/');
    ?>

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
                                        <img src="{{$baseUrl}}/assets/images/upload/{{$item->image}}" alt="" />
                                        <div class="skin-overlay"></div>
                                        <a href="{{$baseUrl}}/assets/images/upload/{{$item->image}}" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                    </div>

                                    <figcaption class="item-description">
                                        <h5><a href="{{$baseUrl}}/service/detail/{{$item->id}}" title="{{$item->title}}">{{$item->title}}</a></h5>
                                        <span><i class="fa fa-calendar"></i> &nbsp;&nbsp;{{date('d/M/Y H:m:s', strtotime($item->created_at))}} </span>
                                        <br/>
                                        <?php
                                            $string = strip_tags($item->description);

                                            if (strlen($string) > 700) {
                                                $stringCut = substr($string, 0, 700);
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