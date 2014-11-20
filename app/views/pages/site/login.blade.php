@section("title") Login | Knowledge First... @stop

@section('menu_style')  @stop

@section('current_page') login @stop

@section("content")

<div class="section">

	<div class="row">
		
		<div class="large-6 medium-6 small-12 large-offset-3 medium-offset-3 columns margintop10 marginbottom10">

			<h4 class="title xl-text marginbottom2 text-center">Login</h4>
			{{Form::open(["url"=>"#", "method"=>"post"])}}
				<div class="row">
					<div class="large-12 medium-12 small-12 columns marginbottom2">
						{{Form::text("email", "", ["placeholder"=>"Email"])}}
					</div>
				</div>
				<div class="row">
					<div class="large-12 medium-12 small-12 columns marginbottom2">
						<input type="password" name="password" placeholder="Password">
					</div>
				</div>

				<div class="row">
					<div class="large-12 medium-12 small-12 columns">
						<button type="submit" class="expand small success button radius">Sign Up</button>
					</div>
				</div>
			{{Form::close()}}

			<p class="text-center xs-text">
				Don't have a account? <a href="{{URL::to('signup')}}">Sign Up</a>
			</p>			

		</div>
	</div>


</div>

@stop