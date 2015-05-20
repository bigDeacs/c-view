@extends('app')

@section('meta')
	<title>Privacy Policy</title>
	<meta name="description" content="Manufactured right here on Australia&#039;s Gold Coast, our windows and doors are as lovely to look at as they are to look through. You will find genuine quality in every inch of {!! $brand->name !!} and doors.">
	<meta name="keywords" content="c-view, windows, doors, Gold Coast, Brisbane, Queensland, Australia, aluminium, sea view, residential, prestige, commercial, screens">
@endsection

@section('head')
@endsection

@section('content')
	<!--=== Breadcrumbs ===-->
	<div class="breadcrumbs margin-bottom-20">
	    <div class="container">
	        <h1 class="pull-left">Privacy Policy</h1>
	        <ul class="pull-right breadcrumb hidden-xs">
	            <li><a href="/">Home</a></li>
	            <li class="active">Privacy</li>
	        </ul>
	    </div><!--/container-->
	</div><!--/breadcrumbs-->
	<!--=== End Breadcrumbs ===-->
	<!--=== Content Part ===-->
    <!--=== Content Part ===-->
<div class="container">
    <div class="tag-box tag-box-v2">
        This Privacy Policy governs the manner in which {!! $brand->name !!} collects, uses, maintains and discloses information collected from users (each, a "User") of the <a href="www.c-view.com.au">www.c-view.com.au</a> website ("Site"). This privacy policy applies to the Site and all products and services offered by {!! $brand->name !!}.<br><br>

<b>Personal identification information</b><br><br>

We may collect personal identification information from Users in a variety of ways, including, but not limited to, when Users visit our site, place an order, subscribe to the newsletter, and in connection with other activities, services, features or resources we make available on our Site.. Users may visit our Site anonymously. We will collect personal identification information from Users only if they voluntarily submit such information to us. Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related activities.<br><br>

<b>Non-personal identification information</b><br><br>

We may collect non-personal identification information about Users whenever they interact with our Site. Non-personal identification information may include the browser name, the type of computer and technical information about Users means of connection to our Site, such as the operating system and the Internet service providers utilized and other similar information.<br><br>

<b>Web browser cookies</b><br><br>

Our Site may use "cookies" to enhance User experience. User's web browser places cookies on their hard drive for record-keeping purposes and sometimes to track information about them. User may choose to set their web browser to refuse cookies, or to alert you when cookies are being sent. If they do so, note that some parts of the Site may not function properly.<br><br>

<b>How we use collected information</b><br><br>

{!! $brand->name !!} may collect and use Users personal information for the following purposes:<br>
<ul>
<li><i>- To improve customer service</i><br>
    Information you provide helps us respond to your customer service requests and support needs more efficiently.</li>
<li><i>- To improve our Site</i><br>
    We may use feedback you provide to improve our products and services.</li>
<li><i>- To run a promotion, contest, survey or other Site feature</i><br>
    To send Users information they agreed to receive about topics we think will be of interest to them.</li>
<li><i>- To send periodic emails</i><br>
We may use the email address to send User information and updates pertaining to their order. It may also be used to respond to their inquiries, questions, and/or other requests. If User decides to opt-in to our mailing list, they will receive emails that may include company news, updates, related product or service information, etc. If at any time the User would like to unsubscribe from receiving future emails, we include detailed unsubscribe instructions at the bottom of each email or User may contact us via our Site.</li>
</ul>
<b>How we protect your information</b><br><br>

We adopt appropriate data collection, storage and processing practices and security measures to protect against unauthorized access, alteration, disclosure or destruction of your personal information, username, password, transaction information and data stored on our Site.<br><br>

<b>Sharing your personal information</b><br><br>

We do not sell, trade, or rent Users personal identification information to others. We may share generic aggregated demographic information not linked to any personal identification information regarding visitors and users with our business partners, trusted affiliates and advertisers for the purposes outlined above.We may use third party service providers to help us operate our business and the Site or administer activities on our behalf, such as sending out newsletters or surveys. We may share your information with these third parties for those limited purposes provided that you have given us your permission.<br><br>

<b>Changes to this privacy policy</b><br><br>

{!! $brand->name !!} has the discretion to update this privacy policy at any time. When we do, we will revise the updated date at the bottom of this page. We encourage Users to frequently check this page for any changes to stay informed about how we are helping to protect the personal information we collect. You acknowledge and agree that it is your responsibility to review this privacy policy periodically and become aware of modifications.<br><br>

<b>Your acceptance of these terms</b><br><br>

By using this Site, you signify your acceptance of this policy. If you do not agree to this policy, please do not use our Site. Your continued use of the Site following the posting of changes to this policy will be deemed your acceptance of those changes.<br><br>

<b>Contacting us</b><br><br>

If you have any questions about this Privacy Policy, the practices of this site, or your dealings with this site, please contact us at:<br>
<a href="http://www.c-view.com.au">{!! $brand->name !!}</a><br>
<a href="http://www.c-view.com.au">www.c-view.com.au</a><br>
@if($brand->address){!! $brand->address !!}<br>@endif
@if($brand->phone){!! $brand->phone !!}<br>@endif
@if($brand->email)<a href="mailto:{!! $brand->email !!}">{!! $brand->email !!}</a><br>@endif
<br>
This document was last updated on May 24, 2014<br><br>

<div style="font-size:10px;color:gray;">Privacy policy created by <a style="font-size:10px;color:gray;text-decoration:none;cursor:default;" href="http://www.generateprivacypolicy.com" target="_blank">Generate Privacy Policy</a></div>
    </div>

    <div class="margin-bottom-20 clearfix"></div>
</div><!--/container-->     
<!--=== End Content Part ===-->

@endsection

@section('scripts')
@endsection