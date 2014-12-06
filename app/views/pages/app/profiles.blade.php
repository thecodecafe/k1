@section('title') Discover People and Company profiles | Knowledge First... @stop

@section('menu_style')  @stop

@section('current_page') profile @stop

@section("content")

<div class="grey section no-padding full-height">

<div class="underlined no-padding section">

	<?php

		$certificates = ["Unchanged", "High School (S.S.C.E)", "Vocational","Bachelor Of Engineering (B.Eng)", "Bachelor Of Science (B.Sc)", "Master of Business Administration (MBA)", "Master Of Science (M.Sc)", "OND", "HND", "NCE", "Diploma"]

	 ?>
	 <div class="no-padding section margintop2 marginbottom2">
	 	
	 	 <div class="row">

	 	 	<div class="large-2 medium-3 small-12 columns show-for-medium-up">
	 	 		<a href="#" class="white small button marginbottom0 profiles-filter-button"><i class="fa fa-filter"></i>&nbsp;Filter Profiles</a>
	 	 	</div>

	 	 	<div class="large-10 medium-9 small-12 columns">
	 	 		<input type="text" placeholder="Search here..." class="marginbottom0 naked-field ligth-grey no-border">
	 	 	</div>

	 	 </div>
	 </div>
	
	<div class="no-padding section show-for-small-only">
		<a href="#" class="secondary button marginbottom0 profiles-filter-button"><i class="fa fa-filter"></i>&nbsp;Filter Profiles</a>
	</div>

	<div class="dark section profiles-filter-pane">
		
		<div class="row">

			<div class="large-4 medium-4 small-12 columns end">
				<label class="uppercase bold xxs-text white-text">Profile Type</label>
				<select class="filter-dds">
					<option vlaue="1">Person</option>
					<option vlaue="2">Corporation</option>
				</select>
			</div>

			<div class="large-4 medium-4 small-12 columns end">
				<label class="uppercase bold xxs-text white-text">Sort By</label>
				<select class="filter-dds">
					<option vlaue="0">Unchanged</option>
					<option vlaue="1">Reputation</option>
					<option vlaue="2">Option 2</option>
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

		<a href="#" class="close-filter grey-text only s-text"><i class="fa fa-long-arrow-up"></i></a>

	</div>
		
</div>

		<?php 
			$profiles = "John Doe, Jane Doe, Jon Doe, Joan Doe, Jonathan Doe, Peter Do, Emily Ziknakski, MTN Nigeria, Mesh Ads, Microsoft, Apple Inc, Nigerian Agip Oil Company, Ubisoft, Marvel";

			$profiles  = explode(",", $profiles);

			$bgs = ["#e37f5b", "#92364b", "#ff6677", "#aa6666", "#ff6666", "#1199ff", "#ff0000", "#ff8833"];

			$profile_types = ["Person", "Corporation"];
		?>


	

		

	<div class=" less-padding grey section fly-in-plugin profiles-container" id="js-masonry-container">

		<div class="profiles-loader">
			<div class="black bg-olay"><img src="{{URL::to('/')}}/assets/img/app/7122.gif" class="loader-icon"></div>
		</div>

		<div class="row">

		  @for($i = 0; $i < count($profiles); $i++)

			 <div class="large-2 medium-2 small-12 columns end item marginbottom3">
			  	
			  	<div class="no-bg dark-bordered no-padding radius2 section ">
					<a href="{{URL::to('profiles/21')}}">
				  		<div class="no-padding section" style="background:#333 url({{URL::to('/')}}/assets/img/app/test/bgs/{{rand(1, 6)}}.jpg) center center no-repeat; background-size:cover;">
				  			
					  			<div class="black bg-olay">&nbsp;</div>

					  			<p class="margintop4 marginbottom4 text-center xxl-text white-text only profiles-image-container">
					  				
					  					<img src="{{URL::to('/')}}/assets/img/app/test/people/{{rand(1, 14)}}.jpg" class="round" >
					  				
					  			</p>

				  			
				  		</div>
			  		<a>
			  		<a href="{{URL::to('profiles/21')}}">
				  		<div class="less-padding light-grey section side-padded underlined">

				  			<h4 class="s-text">
				  				<span class="xs-text black-text only capitalize robotoslab">{{trim($profiles[rand(0, 12)])}}</span>
				  				<span class="xxs-text grey-text capitalize robotoslab">({{$profile_types[rand(0, 1)]}})</span>
				  			</h4>

				  		</div>
				  	</a>

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