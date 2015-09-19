@section('title', 'Feature')
@section('content')
    <?php
    $baseUrl = URL::to('/');
    ?>
    <div class="row">
        <div class="isotope col-lg-12">
            <ul class="portfolio_list clearfix  isotope" id="list" style="position: relative; overflow: hidden; height: 933.6px;">
                @foreach($items as $item)
                    <!--begin List Item -->
                    <li class="list_item col-lg-3 col-md-3 col-sm-3 branding isotope-item" style="position: absolute; left: 0px; top: 0px;">
                        <div class="recent-item">
                            <figure class="touching medium">
                                <div class="pic">
                                    <img src="{{$baseUrl}}/assets/images/upload/{{ !empty($item->photo)?$item->photo:'sample.jpg' }}" title="{{$item->photo}}" alt="{{$item->photo}}"/>
                                </div>
                                <div class="skin-overlay"></div>
                                <a class="hover-zoom mfp-image" href="{{$baseUrl}}/assets/images/upload/{{$item->photo}}"><i class="fa fa-search"></i></a>
                                <a class="hover-link" href="portfolio_single.html">
                                    <i class="fa fa-link"></i>
                                </a>
                                <figcaption class="item-description">
                                    <h5>{{$item->name}}</h5>
                                    <span>{{$item->position}}</span><br/>
                                    <span>{{$item->tel}}</span><br/>
                                    <span>{{$item->email}}</span>
                                </figcaption>
                            </figure>
                        </div>
                    </li>
                    <!--end List Item -->
                @endforeach



            </ul>

        </div>
    </div>
@stop