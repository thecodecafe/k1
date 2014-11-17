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
	{{ HTML::style('assets/scss/site/style.css') }}
</head>

<body>
	<div class="site-container @yield('current_page')">

		@include("_partials.site.menubar")
		@include("_partials.site.mobile_menubar")

		@yield("content")

		<div class="footer">

			<div class="section less-padding nav">

				<div class="row">

					<div class="large-12 medium-12 small-12 columns">

						<div class="row">
							<div class="nav">
								
									<div class="large-12 medium-12 small-12 columns marginbottom2 margintop1 m-text text-center bold">
										<span><a href="#">Knowledge First</a></span>
									</div>
									
										<div class="large-12 medium-12 small-12 columns show-for-medium-up text-center large">
											<a href="#" class="xs-text">What we do</a>

											<a href="#" class="xs-text">Case study</a>

											<a href="#" class="xs-text">Press release</a>

											<a href="#" class="xs-text">Contact</a>

											<a href="#" class="xs-text">Blog</a>

											<a href="#" class="xs-text">help</a>


										</div>
										
										<div class="large-12 medium-12 small-12 columns show-for-small-only small">
											<ul class="no-bullet">
												<li>
													<a href="#" class="xs-text">What we do</a>
												</li>
												<li>
													<a href="#" class="xs-text">Case study</a>
												</li>
												<li>
													<a href="#" class="xs-text">Press release</a>
												</li>
												<li>
													<a href="#" class="xs-text">Contact</a>
												</li>
												<li>
													<a href="#" class="xs-text">Blog</a>
												</li>
												<li>
													<a href="#" class="xs-text">help</a>
												</li>
											</ul>
										</div>
									</ul>
								
							</div>
						</div>

					</div>

				</div>
				
			</div>

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
{{HTML::script("assets/js/site/default.js")}}

<!-- Foundation dot JS -->
{{HTML::script("assets/foundation-5.4.0/js/foundation.min.js")}}

</body>

</html>