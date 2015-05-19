@extends('app')

@section('meta')
	<title>Brochures</title>
	<meta name="description" content="Manufactured right here on Australia&#039;s Gold Coast, our windows and doors are as lovely to look at as they are to look through. You will find genuine quality in every inch of C-View windows and doors.">
	<meta name="keywords" content="c-view, windows, doors, Gold Coast, Brisbane, Queensland, Australia, aluminium, sea view, residential, prestige, commercial, screens">
@endsection

@section('head')
	<link href="{{ asset('/css/pages/portfolio-v2.css') }}" rel="stylesheet" media="screen">
@endsection

@section('content')
	<!--=== Breadcrumbs ===-->
	<div class="breadcrumbs margin-bottom-20 hidden-xs">
	    <div class="container">
	        <h1 class="pull-left">Brochures</h1>
	        <ul class="pull-right breadcrumb">
	            <li><a href="/">Home</a></li>
	            <li class="active">Brochures</li>
	        </ul>
	    </div><!--/container-->
	</div><!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===-->
	<!--=== Content Part ===-->
<div class="container">   
    <div class="row">
		<div class="sorting-block">
			<ul class="sorting-nav sorting-nav-v1 text-center">
				<li class="filter" data-filter="all">All</li>
				@foreach($labels as $label)
					<li class="filter" data-filter="{!! $label->name !!}">{!! $label->name !!}</li>
				@endforeach
			</ul>
			
			<ul class="row sorting-grid">
				@foreach($brochures as $brochure)
					<li class="col-md-3 col-sm-6 col-xs-12 mix {!! $brochure->label->name !!}" data-cat="{!! $brochure->label->name !!}">
						<a href="/uploads/{!! $brochure->file !!}" target="_blank">
							<div class="img-binding">
								<img class="img-responsive" src="/thumbs/{!! $brochure->thumb !!}" alt="alt" style="position:absolute;">
							</div>
							<span class="sorting-cover" style="min-height: 66px;">
								<p style="font-size: 16px; text-align:center;">{!! $brochure->name !!}</p>
							</span>
						</a>
					</li>
				@endforeach
			</ul>
    
        <div class="clearfix"></div>
    </div>
    <!-- End Portfolio Sorting Blocks -->
	</div>
</div><!--/container-->
<!--=== End Content Part ===-->

@endsection

@section('scripts')
	<script src="{{ asset('/plugins/jquery.mixitup.min.js') }}"></script>
	<script src="{{ asset('/js/pages/portfolio.js') }}"></script>
	<script>
		jQuery(document).ready(function() { App.init();	Portfolio.init(); });
	</script>
@endsection