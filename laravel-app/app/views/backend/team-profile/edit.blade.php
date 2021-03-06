@section('title', ucfirst(Request::segment(2)).' - '.ucfirst(Request::segment(3)))
@section('content')
    @include('layouts.backendpartial.navigator')
    <?php
    $baseUrl = URL::to('/');
    ?>
    <div class="container-page">
        <div class="col-md-12">
            <?php echo Form::open(array('url' => 'backend/team-profile/edit', 'files'=> true)) ?>
            <?php
                $statuses = array('approve'=>'Approve', 'pending'=>'Pending');
                $name = ''; if (Input::has('name')){$title = Input::get('name');}
                $status = ''; if (Input::has('status')){$status = Input::get('status');}
                $tel = ''; if (Input::has('tel')){$tel = Input::get('tel');}
                $email = ''; if (Input::has('email')){$email = Input::get('email');}
                $position = ''; if (Input::has('position')){$email = Input::get('position');}
            ?>

                <div class="form-group col-lg-6">
                    <label>Name</label>
                    {{ Form::hidden('id', $article->id, array('class' => 'form-control'))}}
                    {{ Form::text('name', $article->name, array('class' => 'form-control'))}}
                </div>

                <div class="form-group col-lg-6">
                    <label>Position</label>
                    {{ Form::text('position', $article->position, array('class' => 'form-control'))}}
                </div>

                <div class="form-group col-lg-6">
                    <label>Tel</label>
                    {{ Form::text('tel', $article->tel, array('class' => 'form-control'))}}
                </div>

                <div class="form-group col-lg-6">
                    <label>Email</label>
                    {{ Form::text('email', $article->email, array('class' => 'form-control'))}}
                </div>

                <div class="form-group col-lg-6">
                    <label>Status</label>
                    {{ Form::select('status', $statuses, $article->status, ['class' => 'form-control']) }}
                </div>

                <div class="form-group col-lg-6">
                    <label> &nbsp;</label>
                    {{ Form::text('', '', array('class' => 'form-control','style'=>'visibility: hidden'))}}
                </div>

                <div class="form-group col-lg-6">
                    <label>Photo</label>
                    {{ Form::file('photo', array('class' => 'form-control','id'=>'imgInp'))}}
                </div>


            <div class="form-group col-lg-6">
                <img id="blah" src="{{$baseUrl}}/assets/images/upload/{{$article->photo}}" alt="Preview image here" width="200" height="200" />
            </div>

        </div>

        <div class="col-md-12">
            <textarea name="description" class="form-control" id="txtEditor">{{$article->description}}</textarea>
        </div>

        <div class="col-md-12">
            <br/>
            <input type="submit" value="Update" name="submit" class="form-control btn btn-primary"/>
        </div>
        <?php echo Form::close();?>
    </div>
    </div>
@stop