@section('title', 'Detail Dealer')
@section('content')
    <?php
    $baseUrl = URL::to('/');
    ?>

    @foreach($features as $n => $item)
        @if($n == 2)
            <div class="row sub_content">
        @endif
            <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="serviceBox_1">
                    <div class="icon_service">
                        <div class="hover-icon new-effect">
                            <a href="{{$baseUrl}}/feature/{{$item->id}}"><i class="service-1-icon hover-icon-images fa fa-laptop"></i></a>
                        </div>
                        <h3><a href="">{{$item->title}}</a></h3>
                    </div>
                    <a class="read" href="#">Read more</a>
                </div>
            </div>
        @if($n == 2)
            </div>
            <div class="row sub_content">
        @endif
        @if($n == 5)
            </div>
        @endif
        @endforeach
    </div>
@stop