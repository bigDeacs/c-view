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
			  <a href="/faqs/bushfireratings" class="list-group-item">Understanding Bushfire Ratings</a>
			  <a href="/faqs/acousticratings" class="list-group-item">Understanding Acoustic Ratings</a>
			  <a href="/faqs/energyratings" class="list-group-item active">Understanding Energy Ratings</a>
			</div>
		</div>
		<div class="col-md-9 md-margin-bottom-40">
            <div id="accordion-1" class="panel-group acc-v1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-One" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                                <i class="icon-chevron-sign-down"></i> Understanding Energy Ratings - About Energy Efficiency
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse in" id="collapse-One">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img alt="" src="{{ asset('/img/faq/thumb-14.jpg') }}" class="img-responsive">
                                    <strong>Hot Climate Zones 1, 2 &amp; 3</strong>
                                </div>
                                <div class="col-md-6">
Choosing energy efficient windows will make your home more 
comfortable, dramatically reduce your energy costs and help to 
create a brighter, cleaner and healthier environment.
Windows are possibly the most complex and interesting elements 
in the fabric of our homes. They provide light and fresh air and 
offer views that connect our interior living spaces with the great 
outdoors.<br /><br />
However, windows can represent a major source of 
unwanted heat gain in summer and significant heat loss in winter.
Windows can severely impact the heating and cooling loads of a 
building. Between 46%-61% of a home’s heating energy can be 
lost and between 79%-86% of its heat gained through windows. 
Improving their thermal performance increases comfort and 
reduces energy costs and Australia’s greenhouse gas emissions.<br /><br />
Find your climate zone at <a href="http://www.abcb.gov.au/en/major-initiatives/energy-efficiency/climate-zone-maps.aspx" target="_blank">http://www.abcb.gov.au/en/major-initiatives/energy-efficiency/climate-zone-maps.aspx</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-Two" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                                <i class="icon-chevron-sign-down"></i> Understanding Energy Ratings - Hot Climate Zones 1, 2 &amp; 3
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-Two">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                <table class="table">
                                    <tr>
                                        <td>Considerations</td>
                                        <td>Keep solar radiation out of the home
Retain coolness of air-conditioned air</td>
                                    </tr>
                                    <tr>
                                        <td>Preferred U-Value</td>
                                        <td>Low</td>
                                    </tr>
                                    <tr>
                                        <td>Preferred SHGCw</td>
                                        <td>Low</td>
                                    </tr>
                                    <tr>
                                        <td>Other Factors</td>
                                        <td>Windows with high operable areas to maximise opportunity for air movement for 
natural cooling</td>
                                    </tr>
                                    <tr>
                                        <td>Star Impact</td>
                                        <td>SHGCw optimised (tinted) - has the potential to improve up to approximately 1 star.
U-Value - has the potential to improve up to approximately 0.25 stars for each unit 
reduction in U-Value.
Ventilation - has the potential to improve up to approximately 0.25 stars per additional 
20% of openable area.</td>
                                    </tr>
                                    <tr>
                                        <td>Heating/Cooling Impact</td>
                                        <td>Each star corresponds to reduction in Heating/Cooling requirements of 15% to 30% on 
pre improved level.
Star uplift due to reducing SHGC reduces cooling load but may marginally increase 
heating load in cooler months.</td>
                                    </tr>
                                    <tr>
                                        <td>Cost and Green House Gases (GHG) Savings</td>
                                        <td>Approximately 3,000MJ of energy saved per star, mostly cooling - worth about 
$150-$250 and up to 0.35t of GHG. (Based on Brisbane, 240m house)</td>
                                    </tr>
                                </table>
                                <small>Notes:
                                    <ul>
                                        <li>This information is a guide only.</li>
                                        <li>For more specific information refer to your window or glass supplier or the WERS Website (www.wers.net)</li>
                                        <li>For window selection, Australian Building Code requirements and energy raters will specify actual U-Values and SHGCw for BCA-DTS or simulation 
    tools such as AccuRate, FirstRate 5 or BERS Pro.</li>
                                    </ul>
                                </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-Three" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                                <i class="icon-chevron-sign-down"></i> Understanding Energy Ratings - What The Stars Mean
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-Three">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <img alt="" src="{{ asset('/img/faq/thumb-15.jpg') }}" class="img-responsive">
                                    <strong>U-Value (Uw) | Solar Heat Gain Coefficient (SHGCw) | Visible Light Transmittance (Tvw)</strong>
                                </div>
                                <div class="col-md-12">
                                    Everything in the 'building envelope' contributes to the overall energy rating. The most important factor is adequate insulation - but windows and doors are also important.<br /><br />
                                    The star system used for window and door performance is to show relative performance, the same way fridged do. A 6 star house need to achieve a specific rating based on its location, and that rating is for the performance of the whole building - with each separate part doing its job.<br /><br />
                                    For more information see our <a href="" target="_blank">Solar Comfort Brochure</a>
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