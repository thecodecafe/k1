@extends("site.layout.master")
@section("content")

<div class="section">

	<div class="row">

		<div class="large-12 medium-12 small-12 columns end">

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

<div class="grey section">

	@include("app._partials.user.".$user_tab)

</div>

@stop