@section('title', 'List Member')
@section('content')
    @include('layouts.backendpartial.navigator')
	<?php
	$baseUrl = URL::to('/');
	?>
            <div class="container-page">
                <div class="col-md-12">
                    <form>
                    <div class="form-group col-lg-12">
                        <label>Title</label>
                        {{ Form::text('title', '', array('class' => 'form-control'))}}
                    </div>

                    <div class="form-group col-lg-6">
                        <label>Type</label>
                        {{ Form::select('type', [1, 2, 3], null, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group col-lg-6">
                        <label>Status</label>
                        {{ Form::select('type', [1, 2, 3], null, ['class' => 'form-control']) }}
                    </div>

                    <div class="form-group col-lg-6">
                        <label>Image</label>
                        {{ Form::file('image', array('class' => 'form-control','id'=>'imgInp'))}}
                    </div>

                    <div class="form-group col-lg-6">
                        <img id="blah" src="#" alt="Preview image here" width="200" height="200" />
                    </div>
</form>
                </div>

                <div class="col-md-12">
                    <textarea id="txtEditor"></textarea>
                </div>
            </div>
@stop