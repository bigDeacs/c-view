@extends('app')

@section('meta')
	<title>Security Screens</title>
	<meta name="description" content="Manufactured right here on Australia&#039;s Gold Coast, our windows and doors are as lovely to look at as they are to look through. You will find genuine quality in every inch of C-View windows and doors.">
	<meta name="keywords" content="c-view, windows, doors, Gold Coast, Brisbane, Queensland, Australia, aluminium, sea view, residential, prestige, commercial, screens">
@endsection

@section('head')
@endsection

@section('content')
	<!--=== Breadcrumbs ===-->
	<div class="breadcrumbs margin-bottom-20">
	    <div class="container">
	        <h1 class="pull-left">Security Screens</h1>
	        <ul class="pull-right breadcrumb hidden-xs">
	            <li><a href="/">Home</a></li>
	            <li class="active">Screens</li>
	        </ul>
	    </div><!--/container-->
	</div><!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===-->
	<!--=== Content Part ===-->
	<div class="container">   
	    <div class="row">
		@foreach($products as $product)
	        <div class="col-md-3 col-xs-6">
				<div class="thumbnails thumbnail-style thumbnail-kenburn">
		            <div class="thumbnail-img">
		                <div class="overflow-hidden">
		                    <a href="/screen/{!! $product->url !!}">
		                        <img class="img-responsive" src="/images/{!! $product->images()->first()->file !!}" alt="{!! $product->name !!}" />
		                    </a>
		                </div>
		                <a class="btn-more hover-effect hidden-xs" href="/screen/{!! $product->url !!}">read more +</a>                   
		            </div>
		            <div class="caption">
		                <h4><a class="hover-effect" href="/screen/{!! $product->url !!}">{!! $product->name !!}</a></h4>
		                <p></p>
		            </div> 
		        </div>
			</div>
	    @endforeach
		</div>
		<hr />
	</div><!--/container-->
	<!--=== End Content Part ===-->

@endsection

@section('scripts')
@endsection