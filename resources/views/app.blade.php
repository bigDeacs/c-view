<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@yield('meta')
	@yield('head')
	<link rel="icon" href="{{ asset('/img/favicon.ico') }}">
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- App Icons -->
	<link rel="apple-touch-icon" href="{{ asset('/img/touch-icon-iphone.png') }}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/img/touch-icon-ipad.png') }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/img/touch-icon-iphone-retina.png') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/img/touch-icon-ipad-retina.png') }}">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!--=== Recent Posts ===-->    
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=1428829950709319&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<!--=== End Recent Posts ===--> 
	<!--=== Top ===-->    
	<div class="top">
	    <div class="container">         
	        <ul class="loginbar pull-right">
	            <li>
	                <p class="phone"><i class="icon-phone"></i> {!! $brand->phone !!}</p>
	                <p class="phone_btn"><a href="tel:{!! $brand->phone !!}" class="btn btn-block btn-lg btn-primary"><i class="icon-phone"></i> Click to Call</a></p>
	            </li>
	        </ul>
	        <a href="https://www.facebook.com/cviewwindows" target="_blank">
	            <img class="pull-left phone" style="padding-bottom: 15px;" src="{{ asset('/img/FB-114.png') }}" width="114" alt="Find us on Facebook">
	        </a>
	    </div>      
	</div><!--/top-->
	<!--=== End Top ===-->    

	<!--=== Header ===-->    
	<div class="header">
	    <div class="navbar navbar-default" role="navigation">
	        <div class="container">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="/">
	                    <img id="logo-header" src="/images/{!! $brand->logo !!}" width="200" alt="Logo">
	                </a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse navbar-responsive-collapse">
	                <ul class="nav navbar-nav navbar-right">
	                    <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
	                            Products
	                            <i class="icon-angle-down"></i>
	                        </a>
	                        <ul class="dropdown-menu">
	                            <li><a href="/windows">Windows</a></li>
	                            <li><a href="/doors">Doors</a></li>
								<li><a href="/commercials">Commercial</a></li>
								<li><a href="/screens">Screens</a></li>
	                        </ul>
	                    </li>
						<li>
	                        <a href="/brochures">
	                            Brochures
	                        </a>
	                    </li>
						<li>
							<a href="/faq">
	                            FAQ's
	                        </a>
						</li>
	                    <li>
	                        <a href="/about">
	                            About
	                        </a>
	                    </li>
	                    <li>
	                        <a href="/contact">
	                            Contact
	                        </a>
	                    </li>                    
	                </ul>                   
	            </div><!-- /navbar-collapse -->
	        </div>    
	    </div>    
	</div><!--/header-->
	<!--=== End Header ===-->    
	
	@yield('content')

	<!--=== Footer ===-->
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4 md-margin-bottom-40">
	                <!-- About -->
			        <div class="headline"><h2>About</h2></div>	
					<p class="margin-bottom-25 md-margin-bottom-40">@if($brand->about){!! $brand->about !!}@endif</p>	
	                <!-- Contact Us -->
			        <div class="headline"><h2>Contact Us</h2></div>	
	                <address class="md-margin-bottom-40">
						@if($brand->address)<i class="icon-home"></i> {!! $brand->address !!}<br />@endif
						@if($brand->phone)<i class="icon-phone-sign"></i> {!! $brand->phone !!}<br />@endif
						@if($brand->fax)<i class="icon-print"></i> {!! $brand->fax !!}<br />@endif
						@if($brand->email)<i class="icon-envelope-alt"></i> <a href="mailto:{!! $brand->email !!}" class="">{!! $brand->email !!}</a>@endif
	                </address>
				</div><!--/col-md-4-->	
				
				<style>#facebook_posts > *, .fb_iframe_widget span, .fb_iframe_widget iframe { width:100%!important; }</style>
				<div class="col-md-4 md-margin-bottom-40">
	                <div class="posts">
	                    <div class="headline"><h2>Recent Activity</h2></div>
						<div id="facebook_posts"style="position:relative; overflow:hidden; height:300px; background: #ffffff;">
							<div class="fb-like-box" data-href="https://www.facebook.com/cviewwindows" data-width="100%" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false" style="top: -70px;"></div>
	                    </div>
	                </div>
				</div><!--/col-md-4-->

				<div class="col-md-4">
				<!-- Monthly Newsletter -->
			        <div class="headline"><h2>Monthly Newsletter</h2></div>	
					<p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
					<!-- Begin MailChimp Signup Form -->
					<div id="mc_embed_signup">
						<form action="http://brentdeacon.us3.list-manage.com/subscribe/post?u=a926b06132c6a909085105fdf&amp;id=5b79bdef17" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<div class="input-group" style="width: 100%;">
								<input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Email Address" required> 
								<div style="position: absolute; left: -5000px;">
									<input type="text" name="b_a926b06132c6a909085105fdf_5b79bdef17" tabindex="-1" value="">
								</div>						
							</div>
							<div class="input-group" style="width: 100%;">
								<input type="email" value="" name="FNAME" class="form-control" id="mce-FNAME" placeholder="Eg. John" required> 
								<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								<div style="position: absolute; left: -5000px;"><input type="text" name="b_a926b06132c6a909085105fdf_5b79bdef17" tabindex="-1" value=""></div>		
							</div>
							<div class="input-group" style="width: 100%;">	
								<span class="input-group-btn">
									<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn-u btn-block">
								</span>
							 </div>
	                    </form><!--End mc_embed_signup-->
	                </div>
	                <!-- Stay Connected -->
			        <div class="headline"><h2>Stay Connected</h2></div>	
	                <ul class="social-icons">
	                    <!--<li><a href="#" data-original-title="Feed" class="social_rss"></a></li>-->
	                    <li><a href="https://www.facebook.com/cviewwindows" data-original-title="Facebook" class="social_facebook" target="_blank"></a></li>
	                    <li><a href="https://twitter.com/CViewWindows" data-original-title="Twitter" class="social_twitter" target="_blank"></a></li>
	                    <li><a href="https://www.google.com/+C-viewAu" data-original-title="Goole Plus" class="social_googleplus" target="_blank"></a></li>
						<li><a href="http://www.yellowpages.com.au/qld/burleigh-heads/c-view-windows-12403345-listing.html" data-original-title="Yellow Pages" class="social_yellowpages" target="_blank"></a></li>
	                    <li><a href="http://www.pinterest.com/cviewwindows/" data-original-title="Pinterest" class="social_pintrest" target="_blank"></a></li>
	                    <li><a href="http://vimeo.com/user16069931" data-original-title="Vimeo" class="social_vimeo" target="_blank"></a></li>
						<li><a href="http://www.houzz.com.au/pro/cviewwindows/c-view-windows" data-original-title="Houzz" class="social_houzz" target="_blank"></a></li>
	                </ul>
				</div><!--/col-md-4-->
			</div><!--/row-->	
		</div><!--/container-->	
	</div><!--/footer-->	
	<!--=== End Footer ===-->
	<!--=== Copyright ===-->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-8">						
		            <p class="copyright-space">
	                    2012 - <?php echo date("Y") ?> &copy; C-View Windows. ALL Rights Reserved. 
	                    <a href="privacy.php">Privacy Policy</a><!-- | <a href="#">Terms of Service</a>-->
	                </p>
				</div>
				<div class="col-md-4">	
					<a href="index.php">
	                    <img id="logo-footer" src="/images/{!! $brand->logo !!}" width="200" class="pull-right" alt="Logo">
	                </a>
				</div>
			</div><!--/row-->
		</div><!--/container-->	
	</div><!--/copyright-->	
	<!--=== End Copyright ===-->

	<!-- Scripts -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="{{ asset('/plugins/scripts.js') }}"></script>
	<script src="{{ asset('/plugins/gmap/gmap.min.js') }}"></script>
	<script src="{{ asset('/plugins/jquery.mixitup.min.js') }}"></script>
	<script src="{{ asset('/js/app.js') }}"></script>
	<script src="{{ asset('/plugins/jquery-migrate-1.2.1.min.js') }}"></script>
	<script>	
		$(function() {		
			$('#accordion-1').on('shown.bs.collapse', function (e) {			
				var offset = $('.panel.panel-default > .panel-collapse.in').offset();			
				if(offset) {				
					$('html,body').animate({					
						scrollTop: $('.panel-title a').offset().top -20				
					}, 500); 			
				}		
			}); 	
		});		
		function navigateToElement(id) {		
			$('html, body').animate({			
				scrollTop: $("#" + id).offset().top		
			}, 1000);	}
	</script>
	@yield('scripts')
</body>
</html>
