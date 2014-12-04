@section('title') Discover Jobs | Knowledge First... @stop

@section('menu_style')  @stop

@section('current_page') jobs @stop

@section("content")

<div class="grey section no-padding full-height">

<div class="underlined no-padding section">

	<?php

		$certificates = ["Unchanged", "High School (S.S.C.E)", "Vocational","Bachelor Of Engineering (B.Eng)", "Bachelor Of Science (B.Sc)", "Master of Business Administration (MBA)", "Master Of Science (M.Sc)", "OND", "HND", "NCE", "Diploma"]

	 ?>
	 <div class="no-padding section margintop3 marginbottom3">
	 	 <a href="#" class="white button marginbottom0 search-filter-button"><i class="fa fa-filter"></i>&nbsp;Filter Jobs</a>
	 </div>
	
	<div class="dark section filter-pane">
		
		<div class="row">

			<div class="large-4 medium-4 small-12 columns end">
				<label class="uppercase bold xxs-text white-text">Job Type</label>
				<select class="filter-dds">
					<option vlaue="0">Unchanged</option>
					<option vlaue="1">Internship</option>
					<option vlaue="2">Part-Time</option>
					<option vlaue="3">Full Time</option>
				</select>
			</div>

			<div class="large-4 medium-4 small-12 columns end">
				<label class="uppercase bold xxs-text white-text">Industry</label>
				<select class="filter-dds">
					<option vlaue="0">Unchanged</option>
					<option vlaue="1">Information Technology</option>
					<option vlaue="2">Marketting</option>
					<option vlaue="3">Engineering</option>
					<option vlaue="4">Medical</option>
					<option vlaue="5">Civil Service</option>
					<option vlaue="6">Charity</option>
					<option vlaue="7">Relegiuos</option>
				</select>
			</div>

			<div class="large-4 medium-4 small-12 columns end">
				<label class="uppercase bold xxs-text white-text">State</label>
				<select class="filter-dds">
					<option vlaue="0">Unchanged</option>
					<option vlaue="1">Rivers</option>
					<option vlaue="2">Lagos</option>
					<option vlaue="3">Abuja</option>
					<option vlaue="4">Asaba</option>
				</select>
			</div>

			<div class="large-4 medium-4 small-12 columns end">
				<label class="uppercase bold xxs-text white-text">City</label>
				<select class="filter-dds">
					<option vlaue="0">Unchanged</option>
					<option vlaue="1">Port Harcourt</option>
					<option vlaue="2">Lagos</option>
					<option vlaue="3">Abuja</option>
					<option vlaue="4">Asaba</option>
					<option vlaue="5">Yola</option>
					<option vlaue="6">Jos</option>
					<option vlaue="7">Kaduna</option>
					<option vlaue="8">Owerri</option>
				</select>
			</div>

			<div class="large-4 medium-4 small-12 columns end">
				<label class="uppercase bold xxs-text white-text">Certification</label>
				<select class="filter-dds">
					@for ($i=0; $i < count($certificates); $i++) 

						<option value="{{$i}}">{{$certificates[$i]}}</option>

					@endfor
				</select>
			</div>

		</div>

	</div>
		
</div>

		<?php 
			$jobs = "Web Developer, Graphic Artist, iOS Developer, Android Developer, 3D Animator, HR Personelle, Database Administrator, IT Resource Personelle, Network Administrator, Customer Care, Dancer, Marketting, Photographer, Secretary, Front Desk Personelle";

			$jobs  = explode(",", $jobs);

			$categories = ["Information Technology", "Marketting", "Engineering", "Medical", "Civil Service", "Charity", "Relegiuos", "Entertainment", "Media", "Humanitarian Service", "Agriculture / Poultry / Fishing", "Advertising / Marketing / Comms"];

			$colors = ["#e37f5b", "#92364b", "#ff6677", "#aa6666", "#ff6666", "#1199ff", "#ff0000", "#ff8833"];

			$icons = ["fa fa-code", "fa fa-star-o", "fa fa-cab", "fa fa-line-chart", "fa fa-university", "fa fa-desktop", "fa fa-file", "fa fa-archive"];

			$corporations = ["MTN Nigeria", "Mesh Ads", "Microsoft", "Apple Inc", "Facebook", "Nigerian Agip Oil Company", "Code Compas", "Ubisoft", "Marvel", "DC Comics", "The Next Web Inc"];

			$job_types = ["Full Time", "Internship", "Part-Time"];
		?>


	

		

	<div class=" less-padding grey section fly-in-plugin" id="js-masonry-container">

		<div class="jobs-loader">
			<div class="black bg-olay"><img src="{{URL::to('/')}}/assets/img/app/7122.gif" class="loader-icon"></div>
		</div>

		<div class="row">

		  @for($i = 0; $i < count($jobs); $i++)

			 <div class="large-2 medium-2 small-12 columns end item marginbottom3">
			  	
			  	<div class="no-bg dark-bordered no-padding radius2 section ">
					<a href="{{URL::to('jobs/21')}}">
				  		<div class="no-padding section" style="background-color:{{$colors[rand(0, 7)]}};">
				  			
					  			<p class="margintop4 marginbottom4 text-center xxl-text white-text only">
					  				
					  					<i class="{{$icons[rand(0, 7)]}}"></i>
					  				
					  			</p>
				  			
				  		</div>
			  		<a>
			  		<div class="less-padding section side-padded underlined">

			  			<h4 class="s-text">
			  				<a href="{{URL::to('jobs/21')}}" class="xs-text black-text only capitalize robotoslab">{{trim($jobs[rand(0, 14)])}}</a>
			  				<span class="xxs-text grey-text capitalize robotoslab">({{$job_types[rand(0, 2)]}})</span>
			  			</h4>
			  			<p class="margintop0 marginbottom0 xs-text">
			  				<span class="xs-text grey-text only">{{$categories[rand(0, 9)]}}</span>
			  			</p>

			  		</div>

			  		<div class="less-padding light-grey section side-padded">

			  			<div class="row">

			  				<a href="{{URL::to('profile/21')}}">

				  				<div class="large-3 medium-3 small-3 columns">

				  					<img src="{{URL::to('/')}}/assets/img/app/test/people/{{rand(1, 10)}}.jpg" class="fullwidthimage round">

				  				</div>

				  				<div class="large-9 medium-9 small-9 columns">

				  					<span class="italic grey-text only xxs-text bold">{{$corporations[rand(0, 10)]}}</span>

				  				</div>

				  			</a>

			  			</div>

			  		</div>

			  	</div>

		  	</div>

		  @endfor

		</div>
	</div>

	<div class="row">
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

@section("javascripts")

	<!-- Vendors -->
	{{HTML::script("assets/foundation-5.4.0/js/vendor/jquery.js")}}
	{{HTML::script("assets/foundation-5.4.0/js/vendor/fastclick.js")}}
	{{HTML::script("assets/foundation-5.4.0/js/vendor/jquery.cookie.js")}}
	{{HTML::script("assets/foundation-5.4.0/js/vendor/modernizr.js")}}
	{{HTML::script("assets/js/app/default.js")}}
	{{HTML::script("assets/js/app/masonry.pkgd.min.js")}}

	<!-- Foundation dot JS -->
	{{HTML::script("assets/foundation-5.4.0/js/foundation.min.js")}}

	<!-- End call for javascript files -->

@stop

@stop