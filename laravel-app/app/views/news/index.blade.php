@section('title', 'Detail Dealer')
@section('content')
    <?php
    $baseUrl = URL::to('/');
    ?>

    <div class="row">
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
                                        <img src="{{$baseUrl}}/assets/images/portfolio/portfolio_1_1.png" alt="" />
                                        <div class="skin-overlay"></div>
                                        <a href="{{$baseUrl}}/assets/images/portfolio/full/portfolio_4.png" class="hover-zoom mfp-image" ><i class="fa fa-search"></i></a>
                                        <a href="portfolio_single.html" class="hover-link">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    </div>

                                    <figcaption class="item-description">
                                        <h5><a href="{{$baseUrl}}/latest-news/detail/{{$item->id}}" title="{{$item->title}}">{{$item->title}}</a></h5>
                                        <span>Date: {{$item->created_at}}</span>
                                        <br/>
                                        <br/>
                                        <?php
                                            $string = strip_tags($item->description);

                                            if (strlen($string) > 1000) {
                                                $stringCut = substr($string, 0, 1000);
                                                $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'... <a href="'.$baseUrl.'/latest-news/detail/'.$item->id.'" title="{{$item->title}}">Read More</a>';
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