@extends('app')

@section('meta')
	<title>Frequently Asked Question's</title>
	<meta name="description" content="Manufactured right here on Australia&#039;s Gold Coast, our windows and doors are as lovely to look at as they are to look through. You will find genuine quality in every inch of C-View windows and doors.">
	<meta name="keywords" content="c-view, windows, doors, Gold Coast, Brisbane, Queensland, Australia, aluminium, sea view, residential, prestige, commercial, screens">
@endsection

@section('head')
@endsection

@section('content')
	<!--=== Breadcrumbs ===-->
	<div class="breadcrumbs margin-bottom-20">
	    <div class="container">
	        <h1 class="pull-left">Frequently Asked Question's</h1>
	        <ul class="pull-right breadcrumb hidden-xs">
	            <li><a href="/">Home</a></li>
	            <li class="active">Frequently Asked Question's</li>
	        </ul>
	    </div><!--/container-->
	</div><!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===-->

	<!--=== Content Part ===-->
<div class="container">     
    <div class="row margin-bottom-30">
        <!--Accordion--> 
        <div class="col-md-3 md-margin-bottom-40">
			<div class="list-group">
			  <a href="/faqs/glassrules" class="list-group-item">Understanding Glass Rules</a>
			  <a href="/faqs/productcare" class="list-group-item">Product Care</a>
			  <a href="/faqs/bushfireratings" class="list-group-item active">Understanding Bushfire Ratings</a>
			  <a href="/faqs/acousticratings" class="list-group-item">Understanding Acoustic Ratings</a>
			  <a href="/faqs/energyratings" class="list-group-item">Understanding Energy Ratings</a>
			</div>
		</div>
		<div class="col-md-9 md-margin-bottom-40">
            <div id="accordion-1" class="panel-group acc-v1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-One" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                                <i class="icon-chevron-sign-down"></i> Understanding Bushfire Ratings - About Bushfire Ratings
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse in" id="collapse-One">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <img alt="" src="{{ asset('/img/faq/thumb-12.jpg') }}" class="img-responsive">
                                    <strong>Glazing Seals | Air Infiltration | Toughened Glass | Stainless Steel Mesh Screen</strong>
                                </div>
                                <div class="col-md-7">
                                In today's climate where summer conditions are turning extreme, bushfires are becoming a regular occurence around Australia.<br /><br />
                                If you are contructing a house in a bushfire-prone area, you are required by new building codes to use bushfire rated building materials for construction.<br /><br />
                                To help you meet these requirements, Bradman's have devoloped FlameShield, a range of bushfire rated window and door products.<br /><br />
                                Featuring fire rated seals, toughened glass and superior air infiltration, the FlameShield window and door system complies to AS3959 standards<br /><br />
                                For more information see our <a href="" target="_blank">Flame Shield Brochure</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-Two" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                                <i class="icon-chevron-sign-down"></i> Understanding Energy Ratings - How Does It Work
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-Two">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <img alt="" src="{{ asset('/img/faq/thumb-13.jpg') }}" class="img-responsive">
                                    <strong>Bushfire attack levels and corresponding sections for specific construction requirements</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Accordion--> 
    </div>

    <div class="margin-bottom-50"></div>
</div><!--/container-->		
<!--=== End Content Part ===-->

@endsection

@section('scripts')
@endsection