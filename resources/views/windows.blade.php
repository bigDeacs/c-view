@extends('app')

@section('meta')
	<title>Windows</title>
	<meta name="description" content="Manufactured right here on Australia&#039;s Gold Coast, our windows and doors are as lovely to look at as they are to look through. You will find genuine quality in every inch of C-View windows and doors.">
	<meta name="keywords" content="c-view, windows, doors, Gold Coast, Brisbane, Queensland, Australia, aluminium, sea view, residential, prestige, commercial, screens">
@endsection

@section('head')
@endsection

@section('content')
	<!--=== Breadcrumbs ===-->
	<div class="breadcrumbs margin-bottom-20">
	    <div class="container">
	        <h1 class="pull-left">Windows</h1>
	        <ul class="pull-right breadcrumb hidden-xs">
	            <li><a href="/">Home</a></li>
	            <li class="active">Windows</li>
	        </ul>
	    </div><!--/container-->
	</div><!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===-->
	<!--=== Content Part ===-->
	<div class="container">   
	    <div class="row">
		<h3 class="col-md-12">Residential</h3>
		@foreach($products as $product)
			@if($product->category->name == 'Residential')
		        <div class="col-md-3 col-xs-6">
					<div class="thumbnails thumbnail-style thumbnail-kenburn">
			            <div class="thumbnail-img">
			                <div class="overflow-hidden">
			                    <a href="/window/{!! $product->url !!}">
			                        <img class="img-responsive" src="/images/{!! $product->images()->first()->file !!}" alt="{!! $product->name !!}" />
			                    </a>
			                </div>
			                <a class="btn-more hover-effect hidden-xs" href="/window/{!! $product->url !!}">read more +</a>                   
			            </div>
			            <div class="caption">
			                <h4><a class="hover-effect" href="/window/{!! $product->url !!}">{!! $product->name !!}</a></h4>
			                <p></p>
			            </div> 
			        </div>
				</div>
		    @endif
	    @endforeach
		</div>
		<hr />
		<div class="row">
		<h3 class="col-md-12">Prestige</h3>
		@foreach($products as $product)
			@if($product->category->name == 'Prestige')
		        <div class="col-md-3 col-xs-6">
					<div class="thumbnails thumbnail-style thumbnail-kenburn">
			            <div class="thumbnail-img">
			                <div class="overflow-hidden">
			                    <a href="/window/{!! $product->url !!}">
			                        <img class="img-responsive" src="/images/{!! $product->images()->first()->file !!}" alt="{!! $product->name !!}" />
			                    </a>
			                </div>
			                <a class="btn-more hover-effect hidden-xs" href="/window/{!! $product->url !!}">read more +</a>                   
			            </div>
			            <div class="caption">
			                <h4><a class="hover-effect" href="/window/{!! $product->url !!}">{!! $product->name !!}</a></h4>
			                <p></p>
			            </div> 
			        </div>
				</div>
		    @endif
	    @endforeach
		</div>
		<hr />
	</div><!--/container-->
	<!--=== End Content Part ===-->

@endsection

@section('scripts')
@endsection