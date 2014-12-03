@section('title') Discover Jobs | Knowledge First... @stop

@section('menu_style')  @stop

@section('current_page') jobs @stop

@section("content")

<div class="grey section no-padding full-height">

	<div class="row">

		<div class="large-12 medium-12 small-12 columns">

			<div class="no-bg section less-padding">



			</div>

		</div>

		<?php 
			$jobs = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor, incididunt ut labore et, dolore magna aliqua, Ut enim ad minim veniam, quis nostrud exercitation, ullamco laboris nisi ut, aliquip ex ea commodo consequat, Duis aute irure dolor, in reprehenderit in voluptate, velit esse cillum dolore, eu fugiat nulla pariatur, Excepteur sint occaecat, cupidatat non proident, sunt in culpa qui, officia deserunt mollit, anim id est laborum";

			$jobs  = explode(",", $jobs);

			$categories = ["Lorem", "ipsum", "dolor", "sit", "amet", "consectetur", "adipisicing", "elit", "sed", "do", "eiusmod"];

			$colors = ["#e37f5b", "#92364b", "#ff6677", "#aa6666", "#ff6666", "#1199ff", "#ff0000", "#ff8833"];

			$icons = ["fa fa-code", "fa fa-star-o", "fa fa-cab", "fa fa-line-chart", "fa fa-university", "fa fa-desktop", "fa fa-file", "fa fa-archive"];
		?>

		

		<div class="large-12 medium-12 small-12 columns" id="js-masonry-container">
			<div class="row">

			  @foreach($jobs as $job)

				 <div class="large-2 medium-3 small-11 columns end">
				  	
				  	<div class="item no-bg dark-bordered no-padding radius section marginbottom2">

				  		<div class="no-padding section" style="background-color:{{$colors[rand(0, 7)]}};">
				  			<a href="{{URL::to('jobs/21')}}">
					  			<p class="margintop4 marginbottom4 text-center xxl-text white-text only">
					  				
					  					<i class="{{$icons[rand(0, 7)]}}"></i>
					  				
					  			</p>
				  			<a>
				  		</div>
				  		<div class="less-padding section side-padded underlined">

				  			<h4 class="s-text"><a href="{{URL::to('jobs/21')}}" class="xxs-text black-text only capitalize robotoslab">{{trim($job)}}</a></h4>
				  			<p class="margintop0 marginbottom0 xs-text">
				  				<a href="{{URL::to('jobs/21')}}" class="xs-text grey-text only">{{$categories[rand(0, 10)]}}</a>
				  			</p>

				  		</div>

				  		<div class="less-padding light-grey section side-padded">

				  			<div class="row">

				  				<a href="{{URL::to('profile/21')}}">

					  				<div class="large-3 medium-3 small-3 columns">

					  					<img src="{{URL::to('/')}}/assets/img/app/test/people/{{rand(1, 10)}}.jpg" class="fullwidthimage round">

					  				</div>

					  				<div class="large-9 medium-9 small-9 columns">

					  					<span class="italic grey-text only xxs-text bold">Coporation Name</span>

					  				</div>

					  			</a>

				  			</div>

				  		</div>

				  	</div>

			  	</div>

			  @endforeach

			</div>
		</div>

		<div class="large-12 medium-12 small-12 columns">

			<div class="less-padding section text-center no-bg  side-padded overlined margintop3 marginbottom3">

				<button class="xxs-text grey-text bold white tiny button marginbottom0">Loading more...</button>

			</div>

		</div>


	</div>

</div>
<div class="less-padding section  side-padded overlined margintop3 dark-bordered text-center">

	<span class="xxs-text grey-text">&copy; 2014 Knowledge First. All rights reserved.</span>

</div>

@stop