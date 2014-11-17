<div class="large nav-bar @yield('menu_style') show-for-medium-up">
	<div class="nav-bar-inner">
		<ul class="logo-area">
			<li class="name">
				<span><a href="{{ URL::to('/') }}">Knowledge First</a></span>
			</li>
		</ul>

		<!-- This part of the menu appears on the left of the menu -->
		<ul class="menu left">
			<li class="">
				<a href="{{URL::to('what-we-do')}}">What we do</a>
			</li>
			<li class="">
				<a href="{{URL::to('case-study')}}">Case study</a>
			</li>
			<li class="">
				<a href="{{URL::to('blog')}}">Blog</a>
			</li>
		</ul>
		
		<!-- This part of the menu appears on the right of the menu -->
		<ul class="menu right">
			<li class="">
				<a href="{{URL::to('contact')}}">Contact</a>
			</li>
			<li class="">
				<a href="{{URL::to('login')}}">Login</a>
			</li>
			<li class="round-outline-link">
				<a href="{{URL::to('signup')}}"><span>Sign up</span></a>
			</li>
		</ul>

	</div>
</div>