@extends('admin.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>{!! $brand->name !!}<a href="{{ url('/home/brands') }}" class="btn btn-primary btn-lg" style="float: right;"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Back</a></h1></div>

				<div class="panel-body">
					<a href="{{ url('/home/brands/'.$brand->id.'/edit') }}" class="btn btn-warning btn-lg" style="float: right;"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a>
					<img src="/uploads/{!! $brand->logo !!}" class="img-responsive" /><br />
					@if($brand->website)<p><strong>Website: </strong><a href="{!! $brand->website !!}" target="_blank">C-View.com.au</a></p>@endif
					@if($brand->address)<p><strong>Address: </strong>{!! $brand->address !!}</p>@endif
					@if($brand->email)<p><strong>Email: </strong>{!! $brand->email !!}</p>@endif
					@if($brand->phone)<p><strong>Phone: </strong>{!! $brand->phone !!}</p>@endif
					@if($brand->fax)<p><strong>Fax: </strong>{!! $brand->fax !!}</p>@endif
					<hr />
					@if($brand->about)<p><strong>About: </strong>{!! $brand->about !!}</p>@endif
					<div class="row">
						@if($brand->color1)<div class="col-xs-3"><strong style="float: left;">Colour 1: </strong><div style="background-color:#{!! $brand->color1 !!};width: 50px;height: 50px;float: left;"></div></div>@endif
						@if($brand->color2)<div class="col-xs-3"><strong style="float: left;">Colour 2: </strong><div style="background-color:#{!! $brand->color2 !!};width: 50px;height: 50px;float: left;"></div></div>@endif
						@if($brand->color3)<div class="col-xs-3"><strong style="float: left;">Colour 3: </strong><div style="background-color:#{!! $brand->color3 !!};width: 50px;height: 50px;float: left;"></div></div>@endif
						@if($brand->color4)<div class="col-xs-3"><strong style="float: left;">Colour 4: </strong><div style="background-color:#{!! $brand->color4 !!};width: 50px;height: 50px;float: left;"></div></div>@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
