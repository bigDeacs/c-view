@extends('admin.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Blog Articles<a href="{{ url('/home/articles/create') }}" class="btn btn-warning btn-lg" style="float: right;"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Create</a></h1></div>

				<div class="panel-body">
					<div class="table-responsive" style="padding-bottom: 10px;">
						<div class="col-md-12">
							<table id="datatable" class="table table-striped table-hover" cellspacing="0" width="100%">
							    <thead>
							        <tr>
							            <th><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> ID</th>							            
							            <th><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Name</th>
							            <th><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> Body</th>
							            <th>Published</th>
							            <th><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Settings</th>
							        </tr>
							    </thead>
							    <tbody>
							       @foreach ($articles as $article)
										@if($article->status == 0)
											<tr class="danger">
										@elseif ($article->published_at > date('Y-m-d H:i:s'))
											<tr class="warning">
										@elseif ($article->published_at <= date('Y-m-d H:i:s'))
											<tr class="success">
										@endif
											<td>{!! $article->id !!}</td>
											<td>{!! $article->title !!}</td>
											<td>{!! $article->body !!}</td>
											<td>{!! $article->published_at->diffForHumans() !!}</td>
											<td>
												<div class="btn-group" role="group" style="display: flex;">
													<a href="{{ url('/home/articles/'.$article->id) }}" class="btn btn-primary btn-sm">View</a>
													@if($article->status == 0)
														<a href="{{ url('/home/articles/'.$article->id.'/activate') }}" class="btn btn-success btn-sm">Activate</a>
													@else
														<a href="{{ url('/home/articles/'.$article->id.'/deactivate') }}" class="btn btn-danger btn-sm">Deactivate</a>
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
