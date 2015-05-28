@extends('admin.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><h1>{!! $product->name !!}
					<div class="btn-group" role="group" style="display: flex; float: right;">
						<a href="{{ url('/home/products/'.$product->id.'/edit') }}" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Edit</a><a href="{{ url('/home/products') }}" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Back</a>
					</div>
				</h1></div>

				<div class="panel-body">
					<div class="row">
						<div class="col-md-6">
							<strong>Product Type: </strong>{!! $product->type->name !!}
						</div>
						<div class="col-md-6">
							<strong>Product Category: </strong>{!! $product->category->name !!}
						</div>
					</div>
					<p><strong>Description: </strong>{!! $product->description !!}</p>
					<p><strong>Features: </strong>{!! $product->features !!}</p>
					<p><strong>Options: </strong>{!! $product->options !!}</p>
					@if($product->brochure)
						<p><strong>Brochure: </strong><a href="/uploads/{!! $product->brochure->file !!}" target="_blank" class="btn btn-success btn-sm">View Brochure</a></p>
					@endif
					
					<div class="row">
						<div class="col-md-6">
							<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							  	<!-- Wrapper for slides -->
							  	<div class="carousel-inner" role="listbox">
							    	<?php $count = 0; ?>
							    	@foreach($images as $image)
							    		@if($count <= 0)
											<div class="item active">
										@else
											<div class="item">
										@endif
								    		<img src="/uploads/{!! $image->file !!}" alt="{!! $image->name !!}">
							    		</div>
							    		<?php $count++; ?>
									@endforeach
							  	</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<div class="col-md-6">
							@if($product->video)
								{!! $product->video !!}
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
