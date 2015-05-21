@extends('admin.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Gallery Ranking<a href="{{ url('/home/galleryrankings/create') }}" class="btn btn-warning btn-lg" style="float: right;"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Create</a></h1></div>

				<div class="panel-body">
					<div class="table-responsive" style="padding-bottom: 10px;">
						<div class="col-md-12">
							<table id="datatable" class="table table-striped table-hover" cellspacing="0" width="100%">
							    <thead>
							        <tr>
							            <th><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Rank</th>							            
							            <th><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Image</th>
							        </tr>
							    </thead>
							    <tbody>
							       @foreach ($rankings as $ranking)
										<tr class="success">
											<td>{!! $ranking->rank !!}</td>
											<td>{!! $ranking->rankable->name !!}</td>
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
