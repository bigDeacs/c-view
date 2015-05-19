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
			  <a href="/faqs/glassrules" class="list-group-item active">Understanding Glass Rules</a>
			  <a href="/faqs/productcare" class="list-group-item">Product Care</a>
			  <a href="/faqs/bushfireratings" class="list-group-item">Understanding Bushfire Ratings</a>
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
                                <i class="icon-chevron-sign-down color-green"></i> Understanding Glass Rules - Maximum Areas
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse in" id="collapse-One">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <img alt="" src="{{ asset('/img/faq/thumb-1.jpg') }}" class="img-responsive">
									<strong>AS1288-2006 Table 5.1 – Maximum Areas of Safety Glass*</strong>
                                </div>
                                <div class="col-md-7">
                                    This table represents an extract from AS1288-2006 and should be used as a guide only. Maximum areas do not take into account design wind
									pressures. To calculate minimum	glass thickness for stress at ultimate limit state and deflection at the
									serviceability limit state pressures, AS1288-2006 Supplement 1 must be used. For a complete version including minimum thickness of annealed glass,
									refer to the published standard.<br /><br />
									<small>Note: AS1288-2006 states that the maximum area for 3mm annealed (float) glass is: n 0.85m2 for monolithic annealed glass or; n 1.36m2 for annealed glass incorporated in an IGU.</small><br />
								</div>
							</div>
							<hr />
							<div class="row">
                                <div class="col-md-7">
                                    In the above example, the product configuration on the left would be comprised of a combination of 4mm and 5mm monolithic
annealed (float) glass. However, if the same opening was replaced by a single fixed lite, the minimum glass requirement is 8mm
toughened glass at the very least.
As a result, the product on the right would, in most circumstances, be site glazed with additional costs (i.e. crane lift, on-site
labour) accounted for in the final price. Although more visually appealing, this product would be significantly more expensive due
to size restrictions imposed through AS1288-2006.
                                </div>
                                <div class="col-md-5">
									<img alt="" src="{{ asset('/img/faq/thumb-2.jpg') }}" class="img-responsive">
									<strong>Standard size SFS/FFF 2100mm x 3000mm VS Single ‘F’ Fixed Lite of equivalent size</strong>
								</div>
							</div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-Two" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                                <i class="icon-chevron-sign-down color-green"></i> Understanding Glass Rules - Human Impact
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-Two">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Critical Locations for Doors</h3>
Glazing in all doors (including but not limited to hinged, sliding,
stacking and bi-folding) shall be Grade A safety glass in accordance
with AS1288-2006 Table 5.1 and AS1288-2006 Supplement 1.
Side panels next to doors are deemed to be subject to human
impact where the nearest vertical sightline is less than 300mm from
the nearest edge of the doorway opening and within 1200mm of the
floor level and therefore glazing in this instance shall be of Grade A
safety glass.<br /><br />
								</div>
								<div class="col-md-6">
                                    <img alt="" src="{{ asset('/img/faq/thumb-4.jpg') }}" class="img-responsive">
									<strong>Example - Hinged Doors</strong>
                                </div>
							</div>
							<hr />
							<div class="row">
                                <div class="col-md-5">
									<img alt="" src="{{ asset('/img/faq/thumb-3.jpg') }}" class="img-responsive">
									<strong>Example - Sliding Doors</strong>
								</div>
								<div class="col-md-7">
                                    <h3>Glazing Mistaken for a Doorway</h3>
Glazing capable of being mistaken for a doorway or
opening must be Grade A safety glass.
By definition, glazing is considered to be capable
of being mistaken for a doorway if all the following
conditions are met:
							<ul>
								<li>The daylight width is greater than 500mm;</li>
								<li>The daylight height is greater than 1000mm;</li>
								<li>The lowest sightline is within 500mm of the
							floor level;</li>
								<li>The glazing is not opaque, patterned or leadlight;</li>
								<li>Where a transom or hand rail is not incorporated
							within 700mm – 1000mm of floor level;</li>
								<li>Where a louvre has blade widths greater than
							230mm.</li>
							</ul>
                                </div>
							</div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-Three" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                                <i class="icon-chevron-sign-down color-green"></i> Understanding Glass Rules - Manifestation
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-Three">
                        <div class="panel-body">
                            <div class="row">
								<div class="col-md-12">
									 If the presence of glass in a door, side panel or a panel capable of being mistaken for a doorway or opening is not made
apparent by transoms, colonial bars, or other components of the glazing system, or other decorative treatments, the glass
shall be marked to make it visible. However, making glass visible by marking is not a substitute for safety glass where required
in this standard.<br /><br />
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
                                    <img alt="" src="{{ asset('/img/faq/thumb-5.jpg') }}" class="img-responsive">
									<strong>Example - Doors</strong>
                                </div>
								<div class="col-md-6">
                                   Marking shall be in the form of an opaque band
not less than 20mm in height and located so that
the vertical distance from the floor level is:
									<ul>
										<li>not less than 700mm from the upper edge of
the band; and</li>
										<li>not more than 1200mm to the lower edge of
the band.</li>
									</ul>
								</div>
							</div>
							<hr />
							<div class="row">
								<div class="col-md-7">
                                    Marking is required on any glazing where all of
the following applies:
							<ul>
								<li>The height of the glazing is greater than
1000mm at any part; and</li>
								<li>The width of the glazing is greater than
500mm at any part; and</li>
								<li>Any part of the glazing falls within 700mm
of the floor level; and</li>
								<li>The glazing is not provided with at least one
fixed glazing bar, firmly attached to the styles
to locate and protect each face of the glass.
At least one glazing bar shall be located with its
upper edge not less than 500mm, and its
bottom edge not more than 1000mm above
the floor level. The glazing bar shall have a face
width not less than 40mm.</li>
							</ul>
                                </div>
								<div class="col-md-5">
									<img alt="" src="{{ asset('/img/faq/thumb-6.jpg') }}" class="img-responsive">
									<strong>Example - Any Glazing</strong>
								</div>
							</div>
                        </div>
                    </div>
                </div>
				
				<div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-Four" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                                <i class="icon-chevron-sign-down color-green"></i> Understanding Glass Rules - Low Level Glazing
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-Four">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    Glazing where the lowest sightline is within 500mm of the floor level shall be Grade A safety glass. Ordinary annealed (float) 
glass may be used providing glazing is fully framed and not less than 5mm thickness up to a maximum area of 1.2m2. 
Larger areas are not permitted regardless of thickness.
                                </div>
                                <div class="col-md-6">
                                    <img alt="" src="{{ asset('/img/faq/thumb-7.jpg') }}" class="img-responsive">
									<strong>Example - Grade A Safety Glass Required</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				<div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-Five" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                                <i class="icon-chevron-sign-down color-green"></i> Understanding Glass Rules - Wet Areas
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-Five">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img alt="" src="{{ asset('/img/faq/thumb-8.jpg') }}" class="img-responsive">
									<strong>Example - Bathroom</strong>
                                </div>
								<div class="col-md-6">
                                    All glazing including mirrors within 2000mm of the floor level in wet areas shall be Grade A safety glass or Grade B safety glass 
in accordance with the requirements of AS1288-2006 Table 5.1.
									<br /><br /><strong>Note:</strong> Ordinary annealed glass may be used provided it is fully backed by and completely adhered to a solid material in such a 
way that all pieces remain bonded to the backing in the event of breakage.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				<div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-Six" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                                <i class="icon-chevron-sign-down color-green"></i> Understanding Glass Rules - Splashbacks
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-Six">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    Special care needs to be taken when 
toughened glass is to be used as a wall material 
or wall covering near a gas cooking appliance. <br /><br />
									In a residential building where the distance 
from the nearest burner to the surface of 
the glass is greater than 200mm, ordinary 
monolithic annealed (float) glass can be used. 
However, where the distance is 200mm or less 
and greater than 140mm, a minimum 6mm 
toughened glass is required.<br /><br />
									The recommended minimum clearance from 
the nearest burner to the surface of the glass 
is 140mm. Ordinary annealed (float) glass is 
limited to between 40°-50° where toughened 
float glass can be used in situations up to 250°<br /><br />
									<strong>Note:</strong> Splashbacks near a cooker require a fire 
retardant board behind them.
                                </div>
								<div class="col-md-6">
                                    <img alt="" src="{{ asset('/img/faq/thumb-9.jpg') }}" class="img-responsive">
									<strong>Example - Splashback</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				<div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-Seven" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                                <i class="icon-chevron-sign-down color-green"></i> Understanding Glass Rules - Stairway Glazing
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-Seven">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <img alt="" src="{{ asset('/img/faq/thumb-10.jpg') }}" class="img-responsive">
									<strong>Example - Stairway</strong>
                                </div>
								<div class="col-md-6">
									Glass within 2000mm horizontally from the bottom of the stairs and 1000mm either side of the stairs is deemed to be subject to 
human impact and therefore all glazing surrounding a stairway in this high risk zone shall be Grade A safety glass.<br /><br />
									Stairways include stairwells, landings or porches where the stair flight has a minimum of two risers
								</div>
                            </div>
                        </div>
                    </div>
                </div>
				
				<div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="#collapse-Eight" data-parent="#accordion-1" data-toggle="collapse" class="accordion-toggle">
                                <i class="icon-chevron-sign-down color-green"></i> Understanding Glass Rules - Restricted Openings
                            </a>
                        </h4>
                    </div>
                    <div class="panel-collapse collapse" id="collapse-Eight">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    The guide below outlines C-View’s direction in regards to restricted openings in all building types and exceeds requirements
prescribed in the Building Code of Australia.
									<ul>
										<li>Restricted openings apply when it is possible for a person to fall from an openable window, where the distance to the 
nearest surface level below (eg. ground, balcony, roof, pool) is 2700mm or greater (A); and</li>
										<li>Where the openable portion of a window is within 1000mm of the floor level (B), or the lowest part of the frame falls between 
150mm and 760mm of the floor level (C), the openable portion must be restricted to facilitate a 120mm opening.</li>
										<li>The above rules apply to any openable window (eg. louvre, awning, double hung) of any size located on an external wall.</li>
									</ul>
                                </div>
                                <div class="col-md-6">
                                    <img alt="" src="{{ asset('/img/faq/thumb-11.jpg') }}" class="img-responsive">
									<strong>Example - Restricted Openings</strong>
                                </div>
                            </div>
							<hr />
							<div class="row">
								<div class="col-md-12">
									<strong>Note:</strong> Where the openable portion of a window is permanently fitted with a safety grill or security screen so as to prevent access 
to the outside or where the openable portion of a window is equal to or above 1000mm from the floor level and no climbable 
horizontal elements (eg. transoms) exist below the openable portion within 150mm and 760mm from the floor level, no sash 
restriction is required.
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