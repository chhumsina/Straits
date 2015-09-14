@section('title', $title)
<?php
$baseUrl = URL::to('/');
?>
@section('content')
    @include('layouts.backendpartial.navigator')

	<div class="row">
        <div class="col-md-12">
            <div class="row">
            <?php echo Form::open(array('url' => 'backend/service', 'role' => 'form', 'class'=>'form-inline')) ?>
                <div class="col-md-10">
                    <?php
                        $types = array(''=>'Select Type','shipping_agency'=>'Shipping Agency', 'freight_forwarding'=>'Freight Forwarding','other_services'=>'Other Services');
                        $statuses = array(''=>'Select Status','approve'=>'Approve', 'pending'=>'Pending');

                        $title = ''; if (Input::has('title')){$title = Input::get('title');}
                        $status = ''; if (Input::has('status')){$status = Input::get('status');}
                        $type = ''; if (Input::has('type')){$type = Input::get('type');}
                    ?>
                    {{Form::text('title',$title, array('class' => 'form-control', 'placeholder'=>'Title','style'=>' height: 34px; width: 50%;'))}}
                    {{ Form::select('type', $types, $type, ['class' => 'form-control']) }}
                    {{ Form::select('status', $statuses, $status, ['class' => 'form-control']) }}
                    <input type="submit" value="Search" name="search" class="form-control" style=" height: 33px;margin-left: 9px;margin-top: -9px;"/>
                </div>
                <div class="col-md-2">
                    <a href="{{$baseUrl}}/backend/service/create" class="btn btn-default pull-right">Create</a>
                </div>
            </div>
            <?php echo Form::close() ?>
            <br/>
            @if ($articles->count())
                <?php $i = ($articles->getCurrentPage() - 1)* $articles->getPerPage(); ?>
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
							<td><img style="width: 100px; height: 33px;" src="{{$baseUrl}}/assets/images/upload/{{$item->image}}" title="{{$item->image}}" alt="{{$item->image}}"/></td>
							<td><span class="badge">{{ucwords(str_replace("_"," ",$item->type))}}</span></td>
							<td><span  class="{{$item->status}}">{{$item->status}}</span></td>
							<td>{{$item->created_at}}</td>
							<td>
                                @if($item->status == 'approve')
                                    <a class="btn btn-default" href="{{$baseUrl}}/<?php if($item->type == 'news'){echo'latest-news';}else{echo'feature';}?>/detail/{{$item->id}}" target="_blank"><span class="fa fa-eye"></span></a>
                                @else
                                    <a class="btn btn-default alertPending" href="{{$baseUrl}}/<?php if($item->type == 'news'){echo'latest-news';}else{echo'feature';}?>/detail/{{$item->id}}" target="_blank"><span class="fa fa-eye"></span></a>
                                @endif
                                <a class="btn btn-default" href="{{$baseUrl}}/backend/service/edit/{{$item->id}}" ><span class="fa fa-edit"></span></a>
                                <a class="btn btn-danger mgsDelete" href="{{$baseUrl}}/backend/service/delete/{{$item->id}}" ><span class="fa fa-remove">X</span></a>
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
            @else
                There are no record!
            @endif
		</div>
	</div>
	</div>
@stop