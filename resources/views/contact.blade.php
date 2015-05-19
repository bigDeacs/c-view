@extends('app')

@section('meta')
	<title>Contact Us</title>
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
	        <h1 class="pull-left">Contact Us</h1>
	        <ul class="pull-right breadcrumb">
	            <li><a href="/">Home</a></li>
	            <li class="active">Contact Us</li>
	        </ul>
	    </div><!--/container-->
	</div><!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===-->
	<!--=== Content Part ===-->
    <div class="container">     
    <div class="row margin-bottom-30">
        <div class="col-md-8 mb-margin-bottom-30">
            <!-- Google Map -->
            <div class="hidden-xs">
                <iframe src="https://mapsengine.google.com/maps/d/embed?mid=z_yXRxSDstEA.kABQ9eKYROZY" width="100%" style="min-height:350px;"></iframe>
            </div>
            <div class="visible-xs">
                <div class="headline"><h2>Our office location</h2></div>
                <div class="phone_btn">
                    <a href="http://maps.apple.com/maps?q=25 Dover Dr, Burleigh Heads QLD, Australia" class="btn btn-block btn-lg btn-success">
                        <i class="icon-map-marker"></i> Open in Maps
                    </a>
                </div>
            <br /></div>
            <!---/map-->
            <!-- End Google Map -->
            
            <div class="headline"><h2>Enter your details and we will get back to you</h2></div><br />
            {!! Form::open(['route' => 'contactRequest']) !!}
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                            <label class="control-label" for="name">Name:</label>
                            {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'required' => 'required']) !!}
                            {!! errors_for('name', $errors) !!}
                        </div>
                        <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                            <label class="control-label" for="email">Email Address:</label>
                            {!! Form::email('email', null, ['id' => 'email', 'class' => 'form-control', 'required' => 'required']) !!}
                            {!! errors_for('email', $errors) !!}
                        </div>
                        <div class="form-group {!! $errors->has('phone') ? 'has-error' : '' !!}">
                            <label class="control-label" for="phone">Phone Number:</label>
                            {!! Form::tel('phone', null, ['id' => 'phone', 'class' => 'form-control', 'required' => 'required', 'pattern' => '(^13((\ )?\d){4}$)|(^1[38]00((\ )?\d){6}$)|(^(((\(0[23478]\))|(0[23478]))(\ )?)?\d((\ )?\d){7}$)']) !!}
                            {!! errors_for('phone', $errors) !!}
                        </div>
                        <div class="form-group {!! $errors->has('info') ? 'has-error' : '' !!}">
                            <label class="control-label" for="info">Message:</label>
                            {!! Form::textarea('info', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            {!! errors_for('info', $errors) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12">
                            {!! Form::submit('Submit', ['class' => 'btn-u btn-block']) !!}
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
            
        </div><!--/col-md-9-->

        
        <div class="col-md-4">
            <!-- Contacts -->
            <div class="headline"><h2>Contacts</h2></div>
            <ul class="list-unstyled who margin-bottom-30">
                <li><i class="icon-home"></i>25 Dover Drive, Burleigh Heads, Gold Coast, QLD 4220</li>
                <li><i class="icon-envelope-alt"></i><a href="mailto:sales@c-view.com.au" class="">sales@c-view.com.au</a></li>
                <li><i class="icon-phone-sign"></i>(07) 5520 1200</li>
                <li><i class="icon-print"></i> (07) 5520 1644</li>
                <!--<li><a href="#"><i class="icon-globe"></i>http://www.example.com</a></li>-->
            </ul>

            <!-- Business Hours -->
            <div class="headline"><h2>Business Hours</h2></div>
            
            
            
            <ul class="list-unstyled margin-bottom-30">
                <li><strong>Monday-Friday:</strong> 7:30am to 4pm</li>
                <li><strong>Saturday-Sunday:</strong> Closed</li>
            </ul>
            
            <!-- Service Area -->
            <div class="headline hidden-xs"><h2>Our Service Area</h2></div>
            <iframe src="https://mapsengine.google.com/map/embed?mid=z_yXRxSDstEA.k4VlFAbyhrsU" class="hidden-xs" width="100%" height="auto" style="min-height:200px;"></iframe>
            
            <!-- Facebook -->
            <div class="headline hidden-xs"><h2>Find Us On Facebook</h2></div>
            <div class="fb-like-box hidden-xs" style="display: block;" data-href="https://www.facebook.com/cviewwindows" data-width="100%" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
            
            <!-- Twitter -->
            <div class="headline hidden-xs"><h2>Follow Us On Twitter</h2></div>
            <div class="hidden-xs"><a class="twitter-timeline" width="300" height="350" data-dnt="true" href="https://twitter.com/CViewWindows"  data-widget-id="476213545537789952">Tweets by @CViewWindows</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>


    

        </div><!--/col-md-3-->
    </div><!--/row-->        

    <!-- End Our Clients -->
</div><!--/container-->   
<!--=== End Content Part ===-->

@endsection

@section('scripts')
@endsection