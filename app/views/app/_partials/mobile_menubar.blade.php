<div class="small nav-bar show-for-small-only">
	<div class="nav-bar-inner">
		<ul class="logo-area">
			<li class="name">
				<span><a href="{{$base_url}}"><strong>Knowledge First</strong></a></span>
			</li>
		</ul>

		<!-- List of navbar menu -->
		<ul class="menu left">
			<li class="<?php if($current_page == 'wwd'){echo 'bold';} ?>">
				<a href="{{$base_url}}what-we-do">What we do</a>
			</li>
			<li class="<?php if($current_page == 'case-study'){echo 'bold';} ?>">
				<a href="{{$base_url}}case-study">Case study</a>
			</li>
			<li class="<?php if($current_page == 'blog'){echo 'bold';} ?>">
				<a href="{{$base_url}}blog">Blog</a>
			</li>
			<li class="<?php if($current_page == 'contanct'){echo 'bold';} ?>">
				<a href="{{$base_url}}contact">Contact</a>
			</li>
			<li class="<?php if($current_page == 'login'){echo 'bold';} ?>">
				<a href="{{$base_url}}login">Login</a>
			</li>
			<li class="round-outline-link <?php if($current_page == 'signup'){echo 'bold';} ?>">
				<a href="{{$base_url}}signup"><span>Sign up</span></a>
			</li>
		</ul>

		<span class="menu-toggler"><span href="#"><i class="fa fa-bars"></i></span></span>

	</div>
</div>