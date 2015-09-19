@section('title', ucfirst(Request::segment(2)).' - '.ucfirst(Request::segment(3)))
@section('content')
    @include('layouts.backendpartial.navigator')
    <?php
    $baseUrl = URL::to('/');
    ?>
    <div class="container-page">
        <div class="col-md-12">
            <?php echo Form::open(array('url' => 'backend/other/edit', 'files'=> true)) ?>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Banner Image
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <img id="blah" src="{{$baseUrl}}/assets/images/banner/{{$article->image}}" alt="Preview image here"/>
                            <br/>
                            <br/>
                            {{ Form::file('image', array('class' => 'form-control','id'=>'imgInp'))}}
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Welcome
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            {{ Form::text('welcome', $article->welcome, array('class' => 'form-control'))}}
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Contact Us
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <textarea name="description" class="form-control" id="txtEditor">{{$article->contact}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Footer
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            {{ Form::text('footer', $article->footer, array('class' => 'form-control'))}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <br/>
            <input type="submit" value="Update" name="submit" class="form-control btn btn-primary"/>
        </div>
        <?php echo Form::close();?>
    </div>
    </div>
@stop