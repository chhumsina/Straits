@section('title', $title)
<?php
$baseUrl = URL::to('/');
?>
@section('content')
    @include('layouts.backendpartial.navigator')
	<?php echo Form::open(array('url' => 'backend/article', 'role' => 'form', 'class'=>'form-inline')) ?>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-2">
                    <label>Title:</label>
                </div>
                <div class="col-md-2">
                    <?php $saleStaffId = ''; if (Input::has('sale_staff_id')){$id = Input::get('sale_staff_id');} ?>
                    {{Form::text('title',Input::old('title'), array('class' => 'form-control'))}}
                </div>
            </div>
        </div>
	<?php echo Form::close() ?>

	@if ($articles->count())
        <?php $i = ($articles->getCurrentPage() - 1)* $articles->getPerPage(); ?>
	<div class="row">
		<div class="col-md-12">
            <a href="{{$baseUrl}}/backend/article/create" class="btn btn-default">Create</a>
			<div class="table-responsive">

				<table id="mytable" class="table table-bordred table-striped">

					<thead>
					<th>No</th>
					<th>Title</th>
					<th>Image</th>
					<th>Type</th>
					<th>Status</th>
					<th>Created Date</th>
					<th>Action</th>
					</thead>
					<tbody>


					@foreach($articles as $item)
                        <?php $i += 1; ?>
						<tr>
							<td>{{$i}}</td>
							<td>{{$item->title}}</td>
							<td><img style="width: 100px; height: 50px;" src="{{$baseUrl}}/assets/images/upload/{{$item->image}}" title="{{$item->image}}" alt="{{$item->image}}"/></td>
							<td><span class="badge">{{$item->type}}</span></td>
							<td>{{$item->status}}</td>
							<td>{{$item->created_at}}</td>
							<td>
                                <a class="btn btn-default" href="{{$baseUrl}}/backend/article/detail/{{$item->id}}" ><span class="fa fa-eye"></span></a>
                                <a class="btn btn-default" href="{{$baseUrl}}/backend/article/edit/{{$item->id}}" ><span class="fa fa-edit"></span></a>
                                <a class="btn btn-danger mgsDelete" href="{{$baseUrl}}/backend/article/delete/{{$item->id}}" ><span class="fa fa-trash"></span></a>
                            </td>
						</tr>
					@endforeach

					</tbody>

				</table>

				<div class="clearfix"></div>
				<span class="pagination pull-right">
					<?php echo $articles->links();?>
				</span>

			</div>

		</div>
	</div>
	</div>
	@else
			There are no record!
	@endif
@stop