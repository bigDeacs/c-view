<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>C-View Windows | Admin</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
	<link rel="stylesheet" href="/css/pick-a-color-1.2.3.min.css">
	<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />

	<link rel="stylesheet" media="all" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" media="all" type="text/css" href="/css/jquery-ui-timepicker-addon.css" />

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/home"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					@if (Auth::check())
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> Products <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/home/products') }}"><span class="glyphicon glyphicon-gift" aria-hidden="true"></span> Products</a></li>
								<li><a href="{{ url('/home/productrankings') }}"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Product Ranking</a></li>
								<li class="divider"></li>
								<li><a href="{{ url('/home/types') }}"><span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> Product Types</a></li>
								<li><a href="{{ url('/home/categories') }}"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Product Categories</a></li>
								<li><a href="{{ url('/home/colours') }}"><span class="glyphicon glyphicon-tint" aria-hidden="true"></span> Product Colours</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Brochures <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/home/brochures') }}"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Brochures</a></li>
								<li><a href="{{ url('/home/brochurerankings') }}"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Brochure Ranking</a></li>
								<li class="divider"></li>
								<li><a href="{{ url('/home/brochurelabels') }}"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Brochure Labels</a></li>
								<li><a href="{{ url('/home/pdfs') }}"><span class="glyphicon glyphicon-scissors" aria-hidden="true"></span> PDF Tools</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Gallery <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/home/galleries') }}"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Gallery</a></li>
								<li><a href="{{ url('/home/galleryrankings') }}"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> Gallery Ranking</a></li>
								<li class="divider"></li>
								<li><a href="{{ url('/home/imagelabels') }}"><span class="glyphicon glyphicon-tag" aria-hidden="true"></span> Gallery Labels</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Merchandise <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/home/offers') }}"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Merchandise</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Blog <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/home/articles') }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Blog</a></li>
							</ul>
						</li>
					@endif
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/home/brands') }}"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> Settings</a></li>
								<li class="divider"></li>
								<li><a href="{{ url('/auth/logout') }}"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
	<script>
		CKEDITOR.replace('description');
		CKEDITOR.replace('features');
		CKEDITOR.replace('options');
	</script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('#datatable').dataTable({
		        stateSave: true
    		} );
        } );
    </script>
    <script src="/js/tinycolor-0.9.15.min.js"></script>
	<script src="/js/pick-a-color-1.2.3.min.js"></script>
	<script>
		$(".pick-a-color").pickAColor({
		  allowBlank              : true,
		  inlineDropdown          : true
		});
	</script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script type="text/javascript">
		$('#colour_list').select2({
			placeholder: 'Choose a colour'
		});
		$('#brochure_id').select2({
			placeholder: 'Choose a Brochure'
		});
		$('#tag_list').select2({
			placeholder: 'Choose a tag',
			tags: true
		});
	</script>
	<script type="text/javascript">
		$(function(){
		$(".dropdown").hover(            
		        function() {
		            $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
		            $(this).toggleClass('open');
		            $('b', this).toggleClass("caret caret-up");                
		        },
		        function() {
		            $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
		            $(this).toggleClass('open');
		            $('b', this).toggleClass("caret caret-up");                
		        });
		});
	</script>

	<script type="text/javascript" src="/js/jquery-ui-timepicker-addon.js"></script>
	<script type="text/javascript" src="/js/jquery-ui-sliderAccess.js"></script>
	<script type="text/javascript">
		/*
	  	jQuery Document ready
		*/
		$(function()
		{
			$('#published_at').datetimepicker(
			{
				dateFormat: "yy-mm-dd",
				timeFormat: "HH:mm:ss",
				numberOfMonths: 1
			});
		});
	</script>

</body>
</html>
