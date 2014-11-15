@section('title') Daniel Barde's profile | Knowledge First... @stop

@section('menu_style')  @stop

@section('current_page') user @stop

@section('user_tab') user_profile @stop

@section("content")

@include("app._partials.user.profile_header")

<div class="section">

	<div class="row">

	<div class="large-12 medium-12 small-12 columns">

		<div class="row">
			<div class="large-12 medium-12 small-12 columns">
				<ul class="inline-list">
					<li>
						<img src="http://dummyimage.com/128x128/eee/fff" class="round">
					</li>
					<li>
						<p class="text-to-bottom">
							<span class="bold s-text grey-text">
								Daniel Barde
							</span><br>
							<span class="xs-text uppercase black-text">Individual</span>
						</p>
					</li>
				</ul>
			</div>
		</div>

	</div>

</div>
</div>

@stop