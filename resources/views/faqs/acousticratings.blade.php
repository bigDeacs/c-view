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
	<div class="breadcrumbs margin-bottom-20 hidden-xs">
	    <div class="container">
	        <h1 class="pull-left">Frequently Asked Question's</h1>
	        <ul class="pull-right breadcrumb">
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
			  <a href="/faqs/bushfireratings" class="list-group-item">Understanding Bushfire Ratings</a>
			  <a href="/faqs/acousticratings" class="list-group-item active">Understanding Acoustic Ratings</a>
			  <a href="/faqs/energyratings" class="list-group-item">Understanding Energy Ratings</a>
			</div>
		</div>
		<div class="col-md-9 md-margin-bottom-40">
            <div id="accordion-1" class="panel-group acc-v1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-One" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                                <i class="icon-chevron-sign-down color-green"></i> Understanding Acoustic Ratings
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse in" id="collapse-One">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    As a general rule, increasing mass will improve sound insulation.
                                    Brick and concrete walls have stronger sound insulating values
                                    because they are of greater mass when compared to glass. But
                                    because we need glass to see through, to provide natural daylight
                                    and to enhance a buildings look and appeal, the need for greater
                                    sound control when using glass becomes more important.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-Two" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                                <i class="icon-chevron-sign-down color-green"></i> Sound Reduction
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-Two">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    Sound reduction will improve with increased glass
thickness due to the greater mass involved;<br /><br />
                                    Sound reduction will decrease somewhat with increasingly
larger glass areas but not enough to make much difference
in the majority of architectural glass sizes;<br /><br />
                                    Sound reduction will improve with the use of laminated
glass due to the vibration dampening effect of the PVB
interlayer.<br /><br />
                                    Sound reduction will improve with the use of glass/
airspace combinations, but the performance is critically
dependent upon the width of the airspace. An airspace of
100mm is generally regarded as a minimum for reasonable
benefits at medium to high frequencies. The optimum
airspace is about 300mm.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-Three" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                                <i class="icon-chevron-sign-down color-green"></i> Understanding RW Ratings
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-Three">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    The RW Ratings refer to the measure of sound reduction through a wall or other building element. Since the sound reduction may be different at
different frequencies, test measurements are subjected to a
standard procedure which yields a single number that is about
equal to the average sound reduction in the middle of the
human hearing range.
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