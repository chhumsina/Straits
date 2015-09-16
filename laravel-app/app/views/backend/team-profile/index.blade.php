@section('title', $title)
<?php
$baseUrl = URL::to('/');
?>
@section('content')
    @include('layouts.backendpartial.navigator')

	<div class="row">
        <div class="col-md-12">
            <div class="row">
            <?php echo Form::open(array('url' => 'backend/team-profile', 'role' => 'form', 'class'=>'form-inline')) ?>
                <div class="col-md-10">
                    <?php
                        $statuses = array(''=>'Select Status','approve'=>'Approve', 'pending'=>'Pending');
                        $name = ''; if (Input::has('name')){$title = Input::get('name');}
                        $status = ''; if (Input::has('status')){$status = Input::get('status');}
                        $tel = ''; if (Input::has('tel')){$tel = Input::get('tel');}
                        $email = ''; if (Input::has('email')){$email = Input::get('email');}
                        $position = ''; if (Input::has('position')){$email = Input::get('position');}
                    ?>
                    {{Form::text('name',$name, array('class' => 'form-control', 'placeholder'=>'Name','style'=>' height: 34px; width: 50%;'))}}
                    {{ Form::select('status', $statuses, $status, ['class' => 'form-control']) }}
                    <input type="submit" value="Search" name="search" class="form-control" style=" height: 33px;margin-left: 9px;margin-top: -9px;"/>
                </div>
                <div class="col-md-2">
                    <a href="{{$baseUrl}}/backend/team-profile/create" class="btn btn-default pull-right">Create</a>
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
					<th>Name</th>
					<th>Photo</th>
					<th>Position</th>
					<th>Tel</th>
					<th>Email</th>
                    <th>Status</th>
                    <th>Created Date</th>
                    <th>Action</th>
					</thead>
					<tbody>


					@foreach($articles as $item)
                        <?php $i += 1; ?>
						<tr>
							<td>{{$i}}</td>
							<td>{{$item->name}}</td>
							<td><img style="width: 100px; height: 33px;" src="{{$baseUrl}}/assets/images/upload/{{$item->photo}}" title="{{$item->photo}}" alt="{{$item->photo}}"/></td>
                            <td>{{$item->position}}</td>
                            <td>{{$item->tel}}</td>
                            <td>{{$item->email}}</td>
                            <td><span  class="{{$item->status}}">{{$item->status}}</span></td>
							<td>{{$item->created_at}}</td>
							<td>
                                <a class="btn btn-default" href="{{$baseUrl}}/backend/team-profile/edit/{{$item->id}}" ><span class="fa fa-edit"></span></a>
                                <a class="btn btn-danger mgsDelete" href="{{$baseUrl}}/backend/team-profile/delete/{{$item->id}}" ><span class="fa fa-remove">X</span></a>
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