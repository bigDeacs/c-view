@extends('admin.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Edit {!! $brochure->name !!}<a href="{{ url('/home/brochures') }}" class="btn btn-primary btn-lg"style="float: right;">Back</a></h1></div>

				<div class="panel-body">
					{!! Form::model($brochure, ['files' => true, 'route' => ['home.brochures.show', $brochure->id], 'method' => 'PATCH']) !!}
					    {!! Form::hidden('id', null) !!}
					    @include('brochures._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
