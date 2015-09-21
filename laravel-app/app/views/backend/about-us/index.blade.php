@section('title', $title)
<?php
$baseUrl = URL::to('/');
?>
@section('content')
    @include('layouts.backendpartial.navigator')

	<div class="row">
        <div class="col-md-12">
                <?php echo Form::open(array('url' => 'backend/about-us/edit', 'files'=> true)) ?>
                <?php
                $types = array(''=>'Select Type','feature'=>'Feature', 'news'=>'News');
                $statuses = array(''=>'Select Status','approve'=>'Approve', 'pending'=>'Pending');

                $title = ''; if (Input::has('title')){$title = Input::get('title');}
                $status = ''; if (Input::has('status')){$status = Input::get('status');}
                $type = ''; if (Input::has('type')){$type = Input::get('type');}
                ?>

                <div class="form-group col-lg-6">
                    <label>Title</label>
                    {{ Form::hidden('id', $article->id, array('class' => 'form-control'))}}
                    {{ Form::text('title', $article->title, array('class' => 'form-control'))}}
                    {{ Form::hidden('type', $article->type, ['class' => 'form-control']) }}
                    {{ Form::hidden('status', $article->status, ['class' => 'form-control']) }}
                </div>

                <div class="form-group col-lg-6">
                    <label>Image</label>
                    {{ Form::file('image', array('class' => 'form-control','id'=>'imgInp'))}}
                </div>

                <div class="col-md-12">
                    <textarea name="description" class="form-control" id="txtEditor">{{$article->description}}</textarea>
                </div>

                <div class="col-md-12">
                    <br/>
                    <input type="submit" value="Update" name="submit" class="form-control btn btn-primary"/>
                </div>
                <?php echo Form::close();?>
                <!-- end about content -->
            </div>
	</div>
@stop