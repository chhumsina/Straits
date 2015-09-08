@section('title', 'List Member')
@section('content')
	<?php
	$baseUrl = URL::to('/');
	?>

	<h2>Detail</h2>
	<div class="panel">
		<div class="panel-heading">
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
				<div class=" col-md-9 col-lg-9 ">
					<?php echo Form::open(array('url' => 'backend/article/update','role' => 'form', 'class'=>'form-inline')) ?>
					<table class="table table-user-information">
						<tbody>
						<tr>
							<td>Status</td>
							{{Form::hidden('id', $article->id,array('id'=>'id'))}}
							{{ Form::text('title', $article->title, array('class' => 'form-control'))}}
							{{ Form::text('description', $article->description, array('class' => 'form-control'))}}
							{{ Form::text('image', $article->image, array('class' => 'form-control'))}}
							{{ Form::text('status', $article->status, array('class' => 'form-control'))}}
							{{ Form::text('type', $article->type, array('class' => 'form-control'))}}

						<button type="submit" class="btn btn-primary" name="submit" value="submit"><span class="fa fa-edit"></span> Submit </button>
					<?php echo Form::close() ?>
				</div>
			</div>
		</div>
	</div>
@stop