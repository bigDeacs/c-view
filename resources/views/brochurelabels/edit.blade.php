@extends('admin.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Edit {!! $label->name !!}<a href="{{ url('/home/brochurelabels') }}" class="btn btn-primary btn-lg"style="float: right;">Back</a></h1></div>

				<div class="panel-body">
					{!! Form::model($label, ['files'=> true, 'route' => ['home.brochurelabels.show', $label->id], 'method' => 'PATCH']) !!}
					    {!! Form::hidden('id', null) !!}
					    {!! Form::hidden('type', 'Brochure') !!}
					    @include('brochurelabels._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
