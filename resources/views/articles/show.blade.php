@extends('admin.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>{!! $article->title !!}
					<div class="btn-group" role="group" style="display: flex; float: right;">
						<a href="{{ url('/articles/'.$article->id.'/edit') }}" class="btn btn-warning btn-lg">Edit</a><a href="{{ url('/articles') }}" class="btn btn-primary btn-lg">Back</a>
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
