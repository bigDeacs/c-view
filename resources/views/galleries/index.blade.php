@extends('admin.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Gallery<a href="{{ url('/galleries/create') }}" class="btn btn-primary btn-lg"style="float: right;">Create</a></h1></div>

				<div class="panel-body">
					<div class="table-responsive" style="padding-bottom: 10px;">
						<div class="col-md-12">
							<table id="datatable" class="table table-striped table-hover" cellspacing="0" width="100%">
							    <thead>
							        <tr>
							            <th><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> ID</th>							            
							            <th><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Name</th>
							            <th><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Logo</th>
							            <th><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Product</th>
							            <th><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Settings</th>
							        </tr>
							    </thead>
							    <tbody>
							      	@foreach ($images as $image)
							       		@if ($image->product == 0)
											@if ($image->status == 1)
												<tr class="success">
											@else
												<tr class="danger">
											@endif
												<td>{!! $image->id !!}</td>
												<td>{!! $image->name !!}</td>
												<td><img src="/images/{!! $image->thumb !!}" class="img-responsive" width="150" /></td>
												<td>{!! $image->type !!}</td>
												<td>
													<div class="btn-group" role="group" style="display: flex;">
														<a href="{{ url('/galleries/'.$image->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
														@if($image->status == 0)
															<a href="{{ url('/galleries/'.$image->id.'/activate') }}" class="btn btn-success btn-sm">Activate</a>
														@else
															<a href="{{ url('/galleries/'.$image->id.'/deactivate') }}" class="btn btn-danger btn-sm">Deactivate</a>
														@endif
													</div>
												</td>
											</tr>
										@endif
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
