@section('title') Daniel Barde's profile | Knowledge First... @stop

@section('menu_style')  @stop

@section('current_page') user @stop

@section('user_tab') user_profile @stop

@section("content")

@include("_partials.app.user.profile_header")

<div class=" grey section profile-bg">

	<div class="profile-bg-olay">&nbsp;</div>

	<div class="edit-button-container">
		<button class="tiny secondary" type="button"><i class="fa fa-image"></i>&nbsp; Add a background photo</button>
	</div>

	<div class="row">

	<div class="large-12 medium-12 small-12 columns">

		<div class="row">
			<div class="large-12 medium-12 small-12 columns">
				<ul class="inline-list marginbottom0">
					<li>
						<img src="http://dummyimage.com/128x128/ccc/fff" class="round">
					</li>
					<li>
						<ul class="no-bullet light-user-info">
							<li class="bold s-text white-text">
								Daniel Barde
							</li>
							<li class="xs-text uppercase white-text">Individual</li>		
							<li class="xl-text blue-text">2.4K</li>
							<li class="xxs-text uppercase white-text">Reputation Points</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>

	</div>

</div>
</div>

@stop