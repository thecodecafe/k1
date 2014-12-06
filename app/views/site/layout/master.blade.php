<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<meta author="">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Page title -->
	<title>{{$page_title}}</title>

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="{{$base_url}}assets/foundation-5.4.0/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="{{$base_url}}assets/foundation-5.4.0/css/foundation.css">
	<link rel="stylesheet" type="text/css" href="{{$base_url}}assets/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="{{$base_url}}assets/css/style.css">
</head>

<body>
	<div class="site-container {{$current_page}}">

		@include("site._partials.menubar")
		@include("site._partials.mobile_menubar")

		@yield("content")


		<div class="section grey">
			<div class="row">
				<div class="large-12 medium-12 small-12 columns">
					<h3 class="text-center l-text robotoslab marginbottom5">The Company We Keep</h3>
				</div>

				<div class="large-12 medium-12 small-12 columns">

					<div class="row fly-in-plugin">

						@for ($i=0; $i < 12; $i++)

							<div class="large-2 medium-3 small-6 columns end marginbottom2 ffb">
								<img src="http://dummyimage.com/320x320/ccc/fff" class="fullwidthimage radius">
							</div>

						@endfor

					</div>

					<!-- <img class="fullwidthimage" src="{{$base_url}}assets/site/img/corporate-logos.png"> -->
				
				</div>

			</div>
		</div>

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
<script type="text/javascript" src="{{$base_url}}assets/foundation-5.4.0/js/vendor/jquery.js"></script>
<script type="text/javascript" src="{{$base_url}}assets/foundation-5.4.0/js/vendor/fastclick.js"></script>
<script type="text/javascript" src="{{$base_url}}assets/foundation-5.4.0/js/vendor/jquery.cookie.js"></script>
<script type="text/javascript" src="{{$base_url}}assets/foundation-5.4.0/js/vendor/modernizr.js"></script>
<script type="text/javascript" src="{{$base_url}}assets/js/default.js"></script>

<!-- Foundation dot JS -->
<script type="text/javascript" src="{{$base_url}}assets/foundation-5.4.0/js/foundation/foundation.js"></script>

<!-- Foundation -->
<script type="text/javascript" src="{{$base_url}}assets/foundation-5.4.0/js/foundation.min.js"></script>
<!-- End call for javascript files -->

</body>

</html>