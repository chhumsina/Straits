@section('title', ucfirst(Request::segment(1))))
@section('content')
    <?php
    $baseUrl = URL::to('/');
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="who">
                <div class="col-md-6" style="margin-left: -15px">
                    <div class="img-about">
                        <img src="{{$baseUrl}}/assets/images/upload/{{ !empty($item->image)?$item->image:'sample.jpg' }}" alt="" />
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
    <br/>
    <br/>

@stop