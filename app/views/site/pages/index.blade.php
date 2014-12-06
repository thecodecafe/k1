@extends("site.layout.master")
@section("content")

<div class="home-slider">
	<img data-interchange="[{{$base_url}}assets/img/site/homeslider/bg.jpg, (only screen and (min-width: 641px))], [{{$base_url}}assets/img/site/homeslider/bg-mobile.jpg, (only screen and (max-width: 640px))]" class="background-image">

	<div class="sliding-content">
		<ul class="sc-list">
			<li>
				<!-- For large screens -->
				<h2 class="text-center white-text xxl-text bolden shadowy show-for-medium-up single-line">Journey To Your Dream</h2>

				<!-- For small screens -->
				<h4 class="text-center white-text l-text bolden shadowy show-for-small-only single-line">Journey To Your Dream</h4>
			</li>
			<li>
				<!-- For large screens -->
				<h2 class="text-center white-text xxl-text bolden shadowy show-for-medium-up single-line">Build Your Team</h2>

				<!-- For small screens -->
				<h4 class="text-center white-text l-text bolden shadowy show-for-small-only single-line">Build Your Team</h4>
			</li>
			<li>
				<!-- For large screens -->
				<h2 class="text-center white-text xxl-text bolden shadowy singl-line show-for-medium-up single-line">And Win!</h2>

				<!-- For small screens -->
				<h4 class="text-center white-text l-text bolden shadowy show-for-small-only single-line">And Win!</h4>
			</li>
		</ul>
	</div>

</div>

<div class="dark less-padding section">
	<div class="row">
		<div class="large-4 medium-4 small-12 columns margintop1">
			<h4 class="text-center">Get newsletters & updates!</h4>
		</div>

		<div class="large-8 medium-8 small-12 columns margintop1">
			{{Form::open(["method"=>"post", "class"=>"marginbottom0"])}}
				<div class="row">
					<div class="large-12 medium-12 small-12 columns">
						<input type="text" class="naked marginbottom0" placeholder="Enter your email address here...">
					</div>
				</div>
			{{Form::close()}}
		</div>
	</div>
</div>

<div class="section fly-in-plugin">

	<h3 class="text-center robotoslab">Both corporations and individuals benefit!</h3>

	<div class="row">
		<!-- Individuals -->
		<div class="large-4 medium-4 small-12 columns margintop4 fft">
			<div class="row">
				<div class="large-8 medium-8 small-8 large-offset-2 medium-offset-2 small-offset-2 columns end marginbottom2">
					<img class="round fullwidthimage" src="http://dummyimage.com/600x600/eee/fff.png">
				</div>
			</div>
			<h5 class="text-center margintop1 uppercase bold">
				<a href="#">Individuals</a></h5>
				<p class="text-center xs-text">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat...
				</p>
		</div>

		<!-- Corporations -->
		<div class="large-4 medium-4 small-12 columns margintop4 fft">
			<div class="row">
				<div class="large-8 medium-8 small-8 large-offset-2 medium-offset-2 small-offset-2 columns end marginbottom2">
					<img class="round fullwidthimage" src="http://dummyimage.com/600x600/eee/fff.png">
				</div>
			</div>
			<h5 class="text-center margintop1 uppercase bold">
				<a href="#">Corporations</a></h5>
				<p class="text-center xs-text">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat...
				</p>
		</div>

		<!-- Benefits -->
		<div class="large-4 medium-4 small-12 columns margintop4 fft">
			<div class="row">
				<div class="large-8 medium-8 small-8 large-offset-2 medium-offset-2 small-offset-2 columns end marginbottom2">
					<img class="round fullwidthimage" src="http://dummyimage.com/600x600/eee/fff.png">
				</div>
			</div>
			<h5 class="text-center margintop1 uppercase bold">
				<a href="#">Benefits</a></h5>
				<p class="text-center xs-text">
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat...
				</p>
		</div>
	</div>

</div>

<div class="grey section fly-in-plugin">

	<h3 class="text-center robotoslab ffr">Easy to get what you want!</h3>

	<div class="row ffr">
		<!-- Individuals -->
		<div class="large-10 medium-10 small-12 large-offset-1 medium-offset-1 columns margintop4">
			<img class="fullwidthimage" src="{{$base_url}}assets/img/site/browser.png">
		</div>
	</div>

</div>

<div class="section">

	<h3 class="text-center robotoslab">Some people think we're cool</h3>

	<div class="row">
		<!-- Testimonials -->
		<div class="large-12 medium-12 small-12 columns margintop4 fly-in-plugin">
			<div class="testimonial-carousel ffl">
				<div class="tc-inner">

					<div class="tc-content">						
						<div class="large-12 medium-12 small-12 columns text-center marginbottom2">
							<img class="round" src="http://dummyimage.com/200x200/eee/fff.png">
						</div>
						<div class="large-8 medium-10 small-12 large-offset-2 medium-offset-1">
							<p class="text-center robotoslab">
								"This is my own dummy text, since i can't go online to get a lorem ipsum at the moment because of lack of internet connctivity on my system, i wrote this to replace lorem ipsum dummy text."
							</p>
							<p class="text-center s-text">
								<span class="blue-text bold">Jeol Haul</span><br>
								<span class="uppercase">
									CEO - Haulicity
								</span>
							</p>
						</div>
					</div>

					<div class="tc-content">						
						<div class="large-12 medium-12 small-12 columns text-center marginbottom2">
							<img class="round" src="http://dummyimage.com/200x200/eee/fff.png">
						</div>
						<div class="large-8 medium-10 small-12 large-offset-2 medium-offset-1">
							<p class="text-center robotoslab">
								"This is my own dummy text, since i can't go online to get a lorem ipsum at the moment because of lack of internet connctivity on my system, i wrote this to replace lorem ipsum dummy text."
							</p>
							<p class="text-center s-text">
								<span class="blue-text bold">Moose Thafa</span><br>
								<span class="uppercase">
									Art Director - Sjiks
								</span>
							</p>
						</div>
					</div>

					<div class="tc-content">						
						<div class="large-12 medium-12 small-12 columns text-center marginbottom2">
							<img class="round" src="http://dummyimage.com/200x200/eee/fff.png">
						</div>
						<div class="large-8 medium-10 small-12 large-offset-2 medium-offset-1">
							<p class="text-center robotoslab">
								"This is my own dummy text, since i can't go online to get a lorem ipsum at the moment because of lack of internet connctivity on my system, i wrote this to replace lorem ipsum dummy text."
							</p>
							<p class="text-center s-text">
								<span class="blue-text bold">Igoor F'rnandez</span><br>
								<span class="uppercase">
									Marketting Officer - Beef n Cheese
								</span>
							</p>
						</div>
					</div>
				</div>

					<div class="tc-nav text-center s-text">
						<!-- Carousel navigations -->
					</div>
			</div>
		</div>
	</div>

</div>


@stop