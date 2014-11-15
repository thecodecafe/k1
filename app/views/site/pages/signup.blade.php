@extends("site.layout.master")
@section("content")

<div class="section">

	<div class="row">
		
		<div class="large-6 medium-6 small-12 large-offset-3 medium-offset-3 columns margintop2 marginbottom2">

			<h4 class="title xl-text marginbottom0 text-center">Sign Up</h4>
			<p class="text-center xs-center marginbottom2">Create an account for free.</p>
			
			{{Form::open(["url"=>"#", "method"=>"post"])}}
				<div class="row">
					<div class="large-12 medium-12 small-12 columns marginbottom2">
						{{Form::text("email", "", ["placeholder"=>"Email"])}}
					</div>
				</div>
				<div class="row">
					<div class="large-12 medium-12 small-12 columns marginbottom2">
						{{Form::text("reapeat-email", "", ["placeholder"=>"Repeat Email"])}}
					</div>
				</div>
				<div class="row">
					<div class="large-12 medium-12 small-12 columns marginbottom2">
						<input type="password" name="password" placeholder="Password">
					</div>
				</div>

				<div class="row">
					<div class="large-12 medium-12 small-12 columns marginbottom2">
						<select name="type">
							<option value="0">Select account type</option>
							<option value="1">Individual</option>
							<option value="2">Corporate</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="large-12 medium-12 small-12 columns marginbottom2">
						<label>
							<input type="checkbox" name="tnc"> Accept <a href="#">terms and conditions</a> & <a href="#">Privacy policy</a>.</label>					
					</div>
				</div>

				<div class="row">
					<div class="large-12 medium-12 small-12 columns">
						<button type="submit" class="expand small success button radius">Sign Up</button>
					</div>
				</div>
			{{Form::close()}}

			<p class="text-center xs-text">
				Already have a account? <a href="{{URL::to('login')}}">Login</a>

				| Forgot password? <a href="#">Reset</a>
			</p>			

		</div>
	</div>


</div>

@stop