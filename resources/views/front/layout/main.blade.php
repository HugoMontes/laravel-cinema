<!DOCTYPE html>
<html>
<head>
<title>Cinema A Entertainment Category Flat Bootstarp Resposive Website Template | 404 :: w3layouts</title>
{!! Html::style('front/css/bootstrap.css') !!}
<!-- Custom Theme files -->
{!! Html::style('front/css/style.css') !!}
<!-- Custom Theme files -->
{!! Html::script('front/js/jquery.min.js') !!}
@yield('style')
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- header-section-starts -->
	<div class="full">
			<div class="menu">
				<ul>
					<li><a href="index.html"><div class="hm"><i class="home1"></i><i class="home2"></i></div></a></li>
					<li><a href="videos.html"><div class="video"><i class="videos"></i><i class="videos1"></i></div></a></li>
					<li><a href="reviews.html"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
					<li><a class="active" href="404.html"><div class="bk"><i class="booking"></i><i class="booking1"></i></div></a></li>
					<li><a href="contact.html"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
				</ul>
			</div>
		<div class="main">
        @yield('content')
	    </div>
	<div class="clearfix"></div>
	</div>
    @yield('script')
</body>
</html>