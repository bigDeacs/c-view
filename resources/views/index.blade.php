@extends('app')

@section('meta')
	<title>C-View Windows - Fastest Windows on the Coast</title>
	<meta name="description" content="Manufactured right here on Australia&#039;s Gold Coast, our windows and doors are as lovely to look at as they are to look through. You will find genuine quality in every inch of C-View windows and doors.">
	<meta name="keywords" content="c-view, windows, doors, Gold Coast, Brisbane, Queensland, Australia, aluminium, sea view, residential, prestige, commercial, screens">
@endsection

@section('head')
	<link href="{{ asset('/css/responsive-slider.min.css') }}" rel="stylesheet" media="screen">
@endsection

@section('content')
	<!-- RESPONSIVE SLIDER - START -->
	<div class="responsive-slider" data-spy="responsive-slider" data-autoplay="true" data-interval="5000" data-transitiontime="300">
 		<div class="slides" data-group="slides">
		    <ul>
	      		@foreach($offers as $offer)
			        <div class="slide-body" data-group="slide">
			          <img src="/images/{!! $offer->file !!}" alt="{!! $offer->promo !!}">
			        </div>
		      	</li>        
			    @endforeach
	      		<li>
			        <div class="slide-body" data-group="slide">
			          <img src="{{ asset('/img/full-width/2.jpg') }}" alt="Burleigh Beach, Gold Coast">
			        </div>
		      	</li>
				<li>
			        <div class="slide-body" data-group="slide">
			          <img src="{{ asset('/img/full-width/3.jpg') }}" alt="Surfer riding barrel wave">
			        </div>
		      	</li>
			  	<li>
			        <div class="slide-body" data-group="slide">
			          <img src="{{ asset('/img/full-width/4.jpg') }}" alt="Gold Coast City, Night time">
			        </div>
		      	</li>
	    	</ul>
	  	</div>
	  	<a class="slider-control left" href="#" data-jump="prev"><i class="icon-angle-left"></i></a>
	  	<a class="slider-control right" href="#" data-jump="next"><i class="icon-angle-right"></i></a>
	</div>
	<!-- RESPONSIVE SLIDER - END -->
	<!--=== Intro Block ===-->
	<div class="intro">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-9 col-xs-12">
	                <h1><span>Manufactured right here on Australia's Gold Coast.</span></h1>
	                <p class="hidden-xs">At C-View, you will see the dedication to service of a highly-skilled team of local, Gold Coast professionals. Though we specialise in window and door renovation projects, we handle each project with the same kid-glove care, whether from renovator, builder, owner, or handyman.</p>
	            </div>            
	            <div class="col-md-3 hidden-xs">
	                <a href="/about" class="btn-more hover-effect">Find Out More</a>            
	            </div>
	        </div>
	    </div>
	</div><!--/row-->
	<!-- End Intro Block -->
	<!--=== Content Part ===-->
	<div class="container">	
		<!-- Recent Works -->
	    <div class="headline"><h2>Popular Products</h2></div>
		    <div class="row">
				@foreach($products as $product)
					@if(isset($product->rank))
				        <div class="col-md-3 col-sm-6">
				            <div class="thumbnails thumbnail-style thumbnail-kenburn">
				            	<div class="thumbnail-img">
				                    <div class="overflow-hidden">
				                        <a href="/{!! $product->type->url !!}/{!! $product->url !!}">
				                        	<img class="img-responsive" src="/images/{!! $product->image !!}" alt="{!! $product->name !!}" />
				                        </a>
				                    </div>
				                    <a class="btn-more hover-effect hidden-xs" href="/{!! $product->type->url !!}/{!! $product->url !!}">read more +</a>					
				                </div>
				                <div class="caption">
				                    <h3 style="min-height: 66px;"><a class="hover-effect" href="/{!! $product->type->url !!}/{!! $product->url !!}">{!! $product->name !!}</a></h3>
				                </div>
				            </div>
				        </div>
				    @endif
			    @endforeach
		    </div><!--/row-->
			<!-- End Recent Works -->

			<!-- Service Blocks -->
			<div class="row">
				@foreach($brochures as $brochure)
					@if(isset($brochure->rank))
						@if($brochure['rank'] == 1 || $brochure['rank'] == 2 || $brochure['rank'] == 3)
					        <div class="col-md-4">
					        	<div class="headline"><h3>{!! $brochure->name !!}</h3></div>
					    		<div class="service service-blue">
					    			<div class="desc">
					                    <p class="hidden-xs">{!! $brochure->description !!}</p>
						                <a href="/uploads/{!! $brochure->file !!}" target="_blank" class="btn-more btn-more-blue btn-block hover-effect">Find Out More</a>            
					    			</div>
					    		</div>	
					    	</div>
					    @endif
				    @endif
			    @endforeach
			</div><!--/row-->
			<!-- End Service Blokcs -->
		    
			<!-- Info Blokcs -->
			<div class="row">
		    	<!-- Welcome Block -->
				<div class="col-md-8 hidden-xs">
					<div class="headline"><h4>Welcome To C-View Windows</h4></div>
		            <div class="row">
		                <div class="col-sm-4">
		                    <img class="img-responsive margin-bottom-20" src="{{ asset('/img/about/extra.jpg') }}" alt="" />
		                </div>
		                <div class="col-sm-8">
							<p>For any job, look to us for:</p>
		                    <ul class="list-unstyled margin-bottom-20">
		                        <li><i class="icon-ok"></i> No Obligation Quotes</li>
		                        <li><i class="icon-ok"></i> Competitively Short Lead Times</li>
		                        <li><i class="icon-ok"></i> Unique and Professional Quality</li>
		                        <li><i class="icon-ok"></i> Going 'The Extra Mile'</li>
		                    </ul>                    
		                </div>
		            </div>

		            <blockquote class="hero-unify">
		                <p>We have a reputation for providing the 'Fastest Windows on the Coast', as we are an efficient, competitive manufacturer of windows and doors that delivers quality products finessed with excellent customer service.</p>
		                <small>Managing Director, Darrell Deacon</small>
		            </blockquote>
		        </div><!--/col-md-8-->        

		        <!-- Latest Shots -->
		        <div class="col-md-4 hidden-xs">
					@foreach($brochures as $brochure)
						@if(isset($brochure->rank))
							@if($brochure['rank'] == 4)
								<div class="headline"><h2>Featured Brochure</h2></div>
						        <a href="/uploads/{!! $brochure->file !!}" target="_blank">
			                    	<img class="img-responsive margin-bottom-20" src="/thumbs/{!! $brochure->thumb !!}" alt="Featured Brochure" />
								</a>
						    @endif
					    @endif
				    @endforeach
		        </div><!--/col-md-4-->
			</div><!--/row-->	
			<!-- End Info Blokcs -->
		</div><!--/container-->	
@endsection

@section('scripts')
	<script src="{{ asset('/js/jquery.event.move.js') }}"></script>
	<script src="{{ asset('/js/responsive-slider.min.js') }}"></script>
	<script>	
		$(document).ready(function(){	  
			$('.responsive-slider').responsiveSlider({		
				autoplay: true,		interval: 8000,		transitionTime: 500	  
			});	
		});	
	</script>
@endsection