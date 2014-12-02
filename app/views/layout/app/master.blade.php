<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<meta author="">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Page title -->
	<title>@yield('title')</title>

	<!-- Stylesheets -->
	{{ HTML::style('assets/foundation-5.4.0/css/normalize.css') }}
	{{ HTML::style('assets/foundation-5.4.0/css/foundation.css') }}
	{{ HTML::style('assets/font-awesome-4.2.0/css/font-awesome.css') }}
	{{ HTML::style('assets/css/app/style.css') }}
</head>

<body>
	<div class="site-container @yield('current_page')">

		@include("_partials.app.menubar")
		@include("_partials.app.mobile_menubar")

		@yield("content")

		<div class="footer hide">

			<div class="dark section less-padding">

				<div class="row">
					<div class="large-12 medium-12 small-12 text-center">
						<span class="xs-text">&copy; 2014 Knowledge First. All rights reserved;</span>
					</div>
				</div>

			</div>


		</div>
	</div>
<!-- Begin call for javascript files -->

<!-- Vendors -->
{{HTML::script("assets/foundation-5.4.0/js/vendor/jquery.js")}}
{{HTML::script("assets/foundation-5.4.0/js/vendor/fastclick.js")}}
{{HTML::script("assets/foundation-5.4.0/js/vendor/jquery.cookie.js")}}
{{HTML::script("assets/foundation-5.4.0/js/vendor/modernizr.js")}}
{{HTML::script("assets/js/app/default.js")}}

<!-- Foundation dot JS -->
{{HTML::script("assets/foundation-5.4.0/js/foundation.min.js")}}

<!-- End call for javascript files -->

</body>

</html>