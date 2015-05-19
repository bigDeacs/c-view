@extends('admin.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Edit {!! $category->name !!}<a href="{{ url('/home/categories') }}" class="btn btn-primary btn-lg"style="float: right;">Back</a></h1></div>

				<div class="panel-body">
					{!! Form::model($category, ['files'=> true, 'route' => ['home.categories.show', $category->id], 'method' => 'PATCH']) !!}
					    {!! Form::hidden('id', null) !!}
					    @include('categories._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
