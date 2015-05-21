@extends('admin.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				@if($brand)
					<div class="panel-heading"><h1>Brand Settings</h1></div>
				@else
					<div class="panel-heading"><h1>Brand Settings<a href="{{ url('/home/brands/create') }}" class="btn btn-warning btn-lg" style="float: right;"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Create</a></h1></div>
				@endif

				<div class="panel-body">
					<div class="table-responsive" style="padding-bottom: 10px;">
						<div class="col-md-12">
							<table id="datatable" class="table table-striped table-hover" cellspacing="0" width="100%">
							    <thead>
							        <tr>					            
							            <th><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Name</th>
							            <th><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Logo</th>
							            <th><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Website</th>
							            <th><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Settings</th>
							        </tr>
							    </thead>
							    @if($brand)
								    <tbody>
										<tr class="success">								
											<td>{!! $brand->name !!}</td>
											<td><img src="/images/{!! $brand->logo !!}" class="img-responsive" width="150" /></td>
											<td><a href="{!! $brand->website !!}" target="_blank">C-View.com.au</a></td>
											<td>
												<div class="btn-group" role="group" style="display: flex;">
													<a href="{{ url('/home/brands/'.$brand->id) }}" class="btn btn-primary btn-sm">View</a>
												</div>
											</td>
										</tr>
								    </tbody>
								@endif
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
