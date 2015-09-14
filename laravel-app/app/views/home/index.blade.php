@section('title', 'Detail Dealer')
@section('content')
    <?php
    $baseUrl = URL::to('/');
    ?>

    <div class="row sub_content row-eq-height">
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
                        <li><a href="{{$baseUrl}}/service/detail/{{$item->id}}" title="{{$item->title}}">{{$item->title}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
@stop