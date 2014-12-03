<div class="large nav-bar @yield('menu_style') show-for-medium-up">
	<div class="nav-bar-inner">
		<ul class="logo-area">
			<li class="name">
				<span><a href="{{ URL::to('/') }}">Knowledge First</a></span>
			</li>
		</ul>

		<!-- List of navbar menu -->
		<ul class="menu left">
			<li><a href="{{URL::to('jobs')}}" title="Discover Jobs">Discover Jobs</a></li>
		</ul>
		
		
		
		<!-- This part of the menu appears on the right of the menu -->
		<ul class="menu right">
			<li>
				<a href="#" class="m-text white-text show-searchbar-button" title="Search"><i class="fa fa-search"></i></a>
			</li>
			<li class="deadlink">
				<a href="#" class="m-text" title="Notifications"><i class="fa fa-bell"></i></a>
			</li>
			<li class="deadlink">
				<a href="#" class="m-text" title="Notifications"><i class="fa fa-envelope"></i></a>
			</li>
			<li class="user-menu">
				<a href="javascript:;">
					<img src="{{URL::to("/")}}/assets/img/app/test/profile-pic.jpg" class="round"> Daniella <i class="fa fa-angle-down"></i>
				</a>

				<ul class="right submenu">
					<li><a href="{{URL::to('profile')}}/21">Profile</a></li>
					<li><a href="#">Connections</a></li>
					<li><a href="#">Job Applications</a></li>
					<li><a href="#">Settings</a></li>
					<li><a href="#">Log Out</a></li>
				</ul>
			</li>
		</ul>

	</div>
</div>