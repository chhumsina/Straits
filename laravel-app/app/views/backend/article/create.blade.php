@section('title', ucfirst(Request::segment(2)).' - '.ucfirst(Request::segment(3)))
@section('content')
    @include('layouts.backendpartial.navigator')
    <?php
    $baseUrl = URL::to('/');
    ?>
    <div class="container-page">
        <div class="col-md-12">
            <?php echo Form::open(array('url' => 'backend/news/store', 'files'=> true)) ?>
            <?php
            $types = array(''=>'Select Type','feature'=>'Feature', 'news'=>'News');
            $statuses = array(''=>'Select Status','approve'=>'Approve', 'pending'=>'Pending');

            $title = ''; if (Input::has('title')){$title = Input::get('title');}
            $status = ''; if (Input::has('status')){$status = Input::get('status');}
            $type = ''; if (Input::has('type')){$type = Input::get('type');}
            $description = ''; if (Input::has('description')){$description = Input::get('description');}
            ?>
<div class="row">
            <div class="form-group col-lg-6">
                <label>Title</label>
                {{ Form::hidden('type','news', ['class' => 'form-control']) }}
                {{ Form::text('title', $title, array('class' => 'form-control'))}}
            </div>

            <div class="form-group col-lg-6">
                <label>Status</label>
                {{ Form::select('status', $statuses, $status, ['class' => 'form-control']) }}
            </div>
</div>
                <div class="row">
            <div class="form-group col-lg-6">
                <label>Image</label>
                {{ Form::file('image', array('class' => 'form-control','id'=>'imgInp'))}}
            </div>

            <div class="form-group col-lg-6">
                <img id="blah" src="#" alt="Preview image here" width="200" height="200" />
            </div>
</div>
        </div>

        <div class="col-md-12">
            <textarea name="description" class="form-control" id="txtEditor">{{$description}}</textarea>
        </div>

        <div class="col-md-12">
            <br/>
            <input type="submit" value="Create" name="submit" class="form-control btn btn-primary"/>
        </div>
        <?php echo Form::close();?>
    </div>
    </div>
@stop