@extends('admin.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>Edit {!! $product->name !!}<a href="{{ url('/home/products') }}" class="btn btn-primary btn-lg"style="float: right;">Back</a></h1></div>

				<div class="panel-body">
					{!! Form::model($product, ['files'=> true, 'route' => ['home.products.show', $product->id], 'method' => 'PATCH']) !!}

						{!! Form::hidden('id', null) !!}
						@include('products._form')
						
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
