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
            {{$article->contact}}
        </div>
        <!--end isotope -->
    </div> <!--./span12-->

@stop