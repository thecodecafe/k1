<div class="small nav-bar show-for-small-only">
	<div class="nav-bar-inner">
		<ul class="logo-area">
			<li class="name">
				<span><a href="{{URL::to('')}}"><strong>Knowledge First</strong></a></span>
			</li>
		</ul>

		<!-- List of navbar menu -->
		<ul class="menu left">
			<li>
				{{Form::open(["url"=>"search", "method"=>"get", "class"=>"topbar-search-form marginbottom0"])}}
					{{Form::text("term", "", ["autocomplete"=>"off"])}}
				{{Form::close()}}
			</li>
			<li><a href="{{URL::to('profile')}}/21">Profile</a></li>
			<li><a href="#">Connections</a></li>
			<li><a href="#">Settings</a></li>
			<li><a href="#">Log Out</a></li>
		</ul>

		<span class="menu-toggler"><span href="#"><img src="{{URL::to("/")}}/assets/img/app/test/profile-pic.jpg" class="round mobile-menu-loggedin-toggler"></span></span>

	</div>
</div>