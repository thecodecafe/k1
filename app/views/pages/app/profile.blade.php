@section('title') Daniella Barde's profile | Knowledge First... @stop

@section('menu_style')  @stop

@section('current_page') user @stop

@section('user_tab') user_profile @stop

@section("content")
<!-- 
@include("_partials.app.user.profile_header") -->

<div class="grey section profile-bg" style="background:url({{URL::to('/')}}/assets/img/app/test/profile-bg.jpg) center center no-repeat; background-size: cover;">

	<div class="profile-bg-olay">&nbsp;</div>

	<div class="edit-profile-options">
		<a href="javascript:;" class="tiny white button marginbottom0 togglebutton" type="button"><i class="fa fa-pencil"></i></a>
		<ul class="edit-option">
			<li class="xxs-text"><a href="#" class="grey-text">Background photo</a></li>
			<li class="xxs-text"><a href="#" class="grey-text">Profile Picture</a></li>
			<li class="xxs-text"><a href="#" class="grey-text">Settings</a></li>
		</ul>
	</div>

	<div class="row">

		<div class="large-12 medium-12 small-12 columns">


			<div class="row fly-in-plugin">
				<div class="large-12 medium-12 small-12 columns hide">
					<ul class="inline-list marginbottom0">
						<li>
							<img src="http://dummyimage.com/128x128/ccc/fff" class="round main-profile-pic">
						</li>
						<li>
							<ul class="no-bullet light-user-info">
								<li class="bold s-text white-text">
									Daniella Barde
								</li>		
								<li class="xl-text blue-text">2.4K</li>
								<li class="xxs-text uppercase white-text">Reputation Points</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="large-12 medium-12 small-12 columns margintop1 ffl">
					<p class="text-center marginbottom1">
						<img src="{{URL::to("/")}}/assets/img/app/test/profile-pic.jpg" class="round main-profile-pic">
					</p>
					<p class="text-center bold s-text white-text marginbottom0">
						Daniella Barde
					</p>
					<p class="text-center xl-text blue-text marginbottom0">
						2.4K
					</p>
					<p class="text-center xxs-text uppercase white-text marginbottom0">
						Reputation Points
					</p>
				</div>
			</div>

		</div>

	</div>
</div>


<div class="grey no-padding section">

	<div class="row">

		<div class="large-9 medium-8 small-12 columns marginbottom4 margintop4">


			<div class="side-padded less-padding section profile-section">
				<div class="row">
					<div class="large-12 medium-12 small-12 columns">
						<div class="less-padding side-padded section">
						
							<h4 class="l-text text-left light-text">
								Experience

								<div class="add-button">
									<button type="button" class="tiny white button"><i class="fa fa-plus"></i>&nbsp;Add Experience</button>
								</div>
							</h4>

							<div class="no-padding section overlined">
								<ul class="no-bullet">
									<li class="margintop2 xs-text grey-text">
										First one
									</li>
									<li class="margintop2 xs-text grey-text">
										First one
									</li>
									<li class="margintop2 xs-text grey-text">
										First one
									</li>
									<li class="margintop2 xs-text grey-text">
										First one
									</li>
								</ul>
							</div>
						

						</div>


					</div>

					<div class="large-12 medium-12 small-12 columns">
						
					</div>
				</div>
			</div>

			<div class="side-padded less-padding section profile-section margintop3">
				<div class="row">
					<div class="large-12 medium-12 small-12 columns">
						<div class="less-padding side-padded section">
						
							<h4 class="l-text text-left light-text">
								Education
								<div class="add-button">
									<button type="button" class="tiny white button"><i class="fa fa-plus"></i>&nbsp;Add Education</button>
								</div>
							</h4>

							<!-- <ul class="no-bullet xs-text">
								<li class="margintop2"><strong>Name</strong> Daniella Barde</li>
								<li class="margintop2"><strong>Email</strong> email@website.com</li>
								<li class="margintop2"><strong>Phone</strong> 07031376674</li>
								<li class="margintop2"><strong>Date Of Birth</strong> January 18, 1988</li>
							</ul> -->
						

						</div>


					</div>

					<div class="large-12 medium-12 small-12 columns">
						
					</div>
				</div>
			</div>

			<div class="side-padded less-padding section profile-section margintop3">
				<div class="row">
					<div class="large-12 medium-12 small-12 columns">
						<div class="less-padding side-padded section">
						
							<h4 class="l-text text-left light-text">
								Personal Skills
								<div class="add-button">
									<button type="button" class="tiny white button"><i class="fa fa-plus"></i>&nbsp;Add Skill</button>
								</div>
							</h4>

							<!-- <ul class="no-bullet xs-text">
								<li class="margintop2"><strong>Name</strong> Daniella Barde</li>
								<li class="margintop2"><strong>Email</strong> email@website.com</li>
								<li class="margintop2"><strong>Phone</strong> 07031376674</li>
								<li class="margintop2"><strong>Date Of Birth</strong> January 18, 1988</li>
							</ul> -->
						

						</div>


					</div>

					<div class="large-12 medium-12 small-12 columns">
						
					</div>
				</div>
			</div>

			<div class="side-padded less-padding section profile-section margintop3">
				<div class="row">
					<div class="large-12 medium-12 small-12 columns">
						<div class="less-padding side-padded section">
						
							<h4 class="l-text text-left light-text">
								Hobbies
								<div class="add-button">
									<button type="button" class="tiny white button"><i class="fa fa-plus"></i>&nbsp;Add Hobby</button>
								</div>
							</h4>

							<!-- <ul class="no-bullet xs-text">
								<li class="margintop2"><strong>Name</strong> Daniella Barde</li>
								<li class="margintop2"><strong>Email</strong> email@website.com</li>
								<li class="margintop2"><strong>Phone</strong> 07031376674</li>
								<li class="margintop2"><strong>Date Of Birth</strong> January 18, 1988</li>
							</ul> -->
						

						</div>


					</div>

					<div class="large-12 medium-12 small-12 columns">
						
					</div>
				</div>
			</div>

		</div>

		<div class="large-3 medium-4 small-12 columns marginbottom4 margintop4">

			<div class="side-padded less-padding section suggested-connections">
				<h4 class="dark-text xs-text">Suggested Connections</h4>
				<ul class="no-bullet">
					<li>
						<a href="javascript:;" class="conn-cancel"><i class="fa fa-times"></i></a>
						<div class="conn-image">
							<img src="{{URL::to("/")}}/assets/img/app/test/people/10.jpg" class="round fullwidthimage">
						</div>
						<div class="conn-data grey-text xs-text">
							Jane Doe<br>
							<span class="light-text xx-s">300k RP</span>
						</div>
						<div class="conn-button margintop1">
							<button type="button" class="expand tiny button marginbottom0"><i class="fa fa-circle-thin"></i>&nbsp;Connect</button>
						</div>
					</li>
					<li>
						<a href="javascript:;" class="conn-cancel"><i class="fa fa-times"></i></a>
						<div class="conn-image">
							<img src="{{URL::to("/")}}/assets/img/app/test/people/9.jpg" class="round fullwidthimage">
						</div>
						<div class="conn-data grey-text xs-text">
							Jon Doe<br>
							<span class="light-text xx-s">260k connections</span>
						</div>
						<div class="conn-button margintop1">
							<button type="button" class="expand tiny success button marginbottom0"><i class="fa fa-circle"></i>&nbsp;Connected</button>
						</div>
					</li>
					<li>
						<a href="javascript:;" class="conn-cancel"><i class="fa fa-times"></i></a>
						<div class="conn-image">
							<img src="{{URL::to("/")}}/assets/img/app/test/people/8.jpg" class="round fullwidthimage">
						</div>
						<div class="conn-data grey-text xs-text">
							Joan Doe<br>
							<span class="light-text xx-s">4.5m reputation</span>
						</div>
						<div class="conn-button margintop1">
							<button type="button" class="expand tiny button marginbottom0"><i class="fa fa-circle-thin"></i>&nbsp;Connect</button>
						</div>
					</li>
				</ul>
			</div>

		</div>

	</div>
	
</div>

@stop