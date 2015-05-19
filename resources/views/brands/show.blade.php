@extends('admin.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>{!! $brand->name !!}<a href="{{ url('/home/brands') }}" class="btn btn-primary btn-lg"style="float: right;">Back</a></h1></div>

				<div class="panel-body">
					<a href="{{ url('/home/brands/'.$brand->id.'/edit') }}" class="btn btn-warning btn-sm" style="float:right;">Edit</a>
					<img src="/images/{!! $brand->logo !!}" class="img-responsive" />
					<p>{!! $brand->description !!}</p>
					<p><a href="{!! $brand->website !!}" target="_blank">C-View.com.au</a></p>
					<p>{!! $brand->address !!}</p>
					<p>{!! $brand->email !!}</p>
					<p>{!! $brand->phone !!}</p>
					<p>{!! $brand->fax !!}</p>
					<hr />
					<p>{!! $brand->about !!}</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
