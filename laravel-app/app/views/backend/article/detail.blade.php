@section('title', 'List Member')
@section('content')
	<h2>Detail</h2>
	<div class="panel">
		<div class="panel-heading">
		</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
				<div class=" col-md-9 col-lg-9 ">
					<table class="table table-user-information">
						<tbody>
						<tr>
							<td>Username:</td>
							<td>{{$article->title}}</td>
							<td>{{$article->image}}</td>
							<td>{{$article->description}}</td>
							<td>{{$article->title}}</td>
							<td>{{$article->status}}</td>
							<td>{{$article->created_at}}</td>
							<td>{{$article->type}}</td>
						</tr>

					</table>
					<button class="btn btn-default"><span class="fa fa-chevron-circle-left"></span> Back </button>
					<button class="btn btn-primary"><span class="fa fa-edit"></span> Submit </button>
				</div>
			</div>
		</div>
	</div>
@stop