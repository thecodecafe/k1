@section('title') Daniella Barde's profile | Knowledge First... @stop

@section('menu_style')  @stop

@section('current_page') user @stop

@section('user_tab') user_profile @stop

@section("content")

@include("_partials.app.user.profile_header")

<div class="grey section profile-bg" style="background:url({{URL::to('assets/img/app/test/profile-bg.jpg')}}) center center no-repeat; background-size: cover;">

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


<div class="grey section">
	
</div>

@stop
