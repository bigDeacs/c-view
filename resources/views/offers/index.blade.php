@extends('admin.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Offers<a href="{{ url('/home/offers/create') }}" class="btn btn-warning btn-lg" style="float: right;"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Create</a></h1></div>

				<div class="panel-body">
					<div class="table-responsive" style="padding-bottom: 10px;">
						<div class="col-md-12">
							<table id="datatable" class="table table-striped table-hover" cellspacing="0" width="100%">
							    <thead>
							        <tr>
							            <th><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> ID</th>							            
							            <th><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Name</th>
							            <th><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Logo</th>
							            <th><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Settings</th>
							        </tr>
							    </thead>
							    <tbody>
							       @foreach ($offers as $offer)
										@if ($offer->status == 1)
											<tr class="success">
										@else
											<tr class="danger">
										@endif
											<td>{!! $offer->id !!}</td>
											<td>{!! $offer->promo !!}</td>
											<td><img src="/uploads/{!! $offer->thumb !!}" class="img-responsive" width="150" /></td>
											<td>
												<div class="btn-group" role="group" style="display: flex;">
													<a href="{{ url('/home/offers/'.$offer->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
													@if($offer->status == 0)
														<a href="{{ url('/home/offers/'.$offer->id.'/activate') }}" class="btn btn-success btn-sm">Activate</a>
													@else
														<a href="{{ url('/home/offers/'.$offer->id.'/deactivate') }}" class="btn btn-danger btn-sm">Deactivate</a>
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
