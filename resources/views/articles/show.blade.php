@extends('admin.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>{!! $article->title !!}
					<div class="btn-group" role="group" style="display: flex; float: right;">
						<a href="{{ url('/home/articles/'.$article->id.'/edit') }}" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a><a href="{{ url('/home/articles') }}" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Back</a>
					</div>
				</h1></div>

				<div class="panel-body">
					<p><strong>Body: </strong>{!! $article->body !!}</p>
					<p><strong>Published: </strong>{!! $article->published_at->diffForHumans() !!}</p>
					@unless ($article->tags->isEmpty())
						<p><strong>Tags: </strong></p>
						<ul>
							@foreach($article->tags as $tag)
								<li>{!! $tag->name !!}</li>
							@endforeach
						</ul>
					@endunless
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
