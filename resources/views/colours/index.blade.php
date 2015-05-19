@extends('admin.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Product Colours<a href="{{ url('/home/colours/create') }}" class="btn btn-primary btn-lg"style="float: right;">Create</a></h1></div>

				<div class="panel-body">
					<div class="table-responsive" style="padding-bottom: 10px;">
						<div class="col-md-12">
							<table id="datatable" class="table table-striped table-hover" cellspacing="0" width="100%">
							    <thead>
							        <tr>
							            <th><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> ID</th>							            
							            <th><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Name</th>
							            <th><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Settings</th>
							        </tr>
							    </thead>
							    <tbody>
							       @foreach ($colours as $colour)
										@if ($colour->status == 1)
											<tr class="success">
										@else
											<tr class="danger">
										@endif
											<td>{!! $colour->id !!}</td>
											<td>{!! $colour->name !!}</td>
											<td>
												<div class="btn-group" role="group" style="display: flex;">
													<a href="{{ url('/home/colours/'.$colour->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
													@if($colour->status == 0)
														<a href="{{ url('/home/colours/'.$colour->id.'/activate') }}" class="btn btn-success btn-sm">Activate</a>
													@else
														<a href="{{ url('/home/colours/'.$colour->id.'/deactivate') }}" class="btn btn-danger btn-sm">Deactivate</a>
													@endif
												</div>
											</td>
										</tr>
									@endforeach
							    </tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
