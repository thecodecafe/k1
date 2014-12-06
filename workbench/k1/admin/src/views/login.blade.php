<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<title>Login :: Knowledge First - Backend</title>
		<!-- Stylesheets -->
		{{ HTML::style('assets/css/bootstrap.css') }}
		{{ HTML::style('assets/css/animate.css') }}
		{{ HTML::style('assets/css/backend/font.css') }}
		{{ HTML::style('assets/css/backend/app.css') }}
	</head>

	<body>
		<div class="app">

			<div class="container w-xxl w-auto-xs animated fadeInDown">
				<a href class="navbar-brand block m-t">Knowledge First</a>
			    <div class="m-b-lg">
				    <div class="wrapper text-center">
				      <strong>Sign in</strong>
				    </div>

			    	{{ Form::open(array('url' => 'admin/login', 'method' => "post", 'class' => "form_validation")) }}
			    		@if($message)
			      		<div class="alert alert-danger">{{ $message }}</div>
			      		@endif

			      		<div class="list-group list-group-sm">
					        <div class="list-group-item">
					          <input type="email" placeholder="Email" name="email" class="form-control no-border">
					        </div>
					        <div class="list-group-item">
					           <input type="password" placeholder="Password" name="password" class="form-control no-border">
					        </div>
			     		</div>

			     		 <div class="checkbox m-b-md m-t-none">
					        <label class="i-checks">
					            <input type="checkbox" name="remember" value="true"><i></i> Remember Me</a>
					        </label>
					    </div>

			     	 	<button type="submit" class="btn btn-lg btn-primary btn-block" ng-click="login()" ng-disabled='form.$invalid'>Log in</button>

			     		<div class="text-center m-t m-b"><a href="{{ URL::to('admin/forgot-password') }}">Forgot password?</a></div>
			  		</form>
			  </div>

			  <div class="text-center">
			  		<p><small class="text-muted">Knowledge First<br>&copy; 2014</small></p>
			  </div>
			</div>

		</div>
	</body>
</html>