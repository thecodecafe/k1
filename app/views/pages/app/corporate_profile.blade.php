@section('title') MTN Nigeria's profile | Knowledge First... @stop

@section('menu_style')  @stop

@section('current_page') user @stop

@section('user_tab') user_profile @stop

@section("content")

<div class="grey section no-padding">

	<div class="row">

		<div class="large-12 medium-12 small-12">

			<div class="grey section profile-bg" style="background:url({{URL::to('assets/img/app/test/profile-bg2.jpg')}}) center center no-repeat; background-size: cover;">

				<div class="profile-bg-olay">&nbsp;</div>

				<div class="edit-profile-options">
					<a href="javascript:;" class="tiny white button marginbottom0 togglebutton" type="button"><i class="fa fa-pencil"></i></a>
					<ul class="edit-option">
						<li class="xxs-text"><a href="#" class="grey-text">Background photo</a></li>
						<li class="xxs-text"><a href="#" class="grey-text">Profile Picture</a></li>
						<li class="xxs-text"><a href="#" class="grey-text">Settings</a></li>
					</ul>
				</div>

				<div class="row">

					<div class="large-12 medium-12 small-12 columns">


						<div class="row fly-in-plugin">
							<div class="large-12 medium-12 small-12 columns hide">
								<ul class="inline-list marginbottom0">
									<li>
										<img src="{{URL::to("/")}}/assets/img/app/test/people/1.jpg" class="round main-profile-pic">
									</li>
									<li>
										<ul class="no-bullet light-user-info">
											<li class="bold s-text white-text">
												MTN Nigeria
											</li>		
											<li class="xl-text blue-text">2.4K</li>
											<li class="xxs-text uppercase white-text">Connection</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="large-12 medium-12 small-12 columns margintop1 ffl">
								<p class="text-center marginbottom1">
									<img src="{{URL::to("/")}}/assets/img/app/test/people/1.jpg" class="round main-profile-pic">
								</p>
								<p class="text-center bold s-text white-text marginbottom0">
									MTN Nigeria
								</p>
								<p class="text-center xxs-text white-text marginbottom0">
									Corporation
								</p>
								<p class="text-center xl-text blue-text marginbottom0">
									2.4K
								</p>
								<p class="text-center xxs-text uppercase white-text marginbottom0">
									Connections
								</p>
							</div>
						</div>

						<div class="row">
							<div class="large-12 medium-12 small-12 columns end profile-contacts margintop2 fly-in-plugin">
								<a href="#" class="contact-link ffl"><span class="cl-icon"><i class="fa fa-phone"></i></span></a>
								<a href="#" class="contact-link ffl"><span class="cl-icon"><i class="fa fa-envelope-o"></i></span></a>
								<a href="#" class="contact-link ffl"><span class="cl-icon"><i class="fa fa-twitter"></i></span></a>
								<a href="#" class="contact-link ffl"><span class="cl-icon"><i class="fa fa-facebook"></i></span></a>
								<a href="#" class="contact-link ffl"><span class="cl-icon"><i class="fa fa-google-plus"></i></span></a>
							</div>
						</div>

					</div>

				</div>
			</div>

		</div>

	</div>

</div>


<div class="grey section">

	<div class="row">

		<div class="large-9 medium-8 small-12 columns">


			<div class="side-padded less-padding section profile-section radius">
				<div class="row">
					<div class="large-12 medium-12 small-12 columns">
						<div class="less-padding side-padded section">
						
							<h4 class="l-text text-left light-text">
								Available Jobs

								<div class="add-button">
									<button type="button" class="tiny white button"><i class="fa fa-plus"></i>&nbsp;Add Job</button>
								</div>
							</h4>

							<div class="no-padding section overlined">

								<ul class="no-bullet ps-list">
									
									<li class="marginbottom2 margintop2 xs-text grey-text">
										<h4 class="m-text bold marginbottom0">Customer Care Representative</h4>
										<p class="s-text marginbottom0 bold">Marketting &amp; Adertising</p>
										<p class="xs-text marginbottom0">Salary Range: 30,000 - 100,000</p>
										<p class="xs-text marginbottom0">
											Port Harcourt, Rivers
										</p>
										<p class="xs-text marginbottom0">
											Habdles calls from current and prospective customers.
										</p>

										<div class="ps-actions s-text">				
											<a href="#" class="grey-text">
												<i class="fa fa-pencil"></i>
											</a>
										</div>
									</li>

									<li class="marginbottom2 margintop2 xs-text grey-text">
										<h4 class="m-text bold marginbottom0">Dancer</h4>
										<p class="s-text marginbottom0 bold">Skills &amp; Talent</p>
										<p class="xs-text marginbottom0">Salary Range: Less than 30,000</p>
										<p class="xs-text marginbottom0">
											Lagos, Nigeria
										</p>
										<p class="xs-text marginbottom0">
											Dance with publicity crew and sell MTN SIM cards on the streets.
										</p>

										<div class="ps-actions s-text">				
											<a href="#" class="grey-text">
												<i class="fa fa-pencil"></i>
											</a>
										</div>
									</li>


								</ul>

							</div>
						

						</div>


					</div>

					<div class="large-12 medium-12 small-12 columns">
						
					</div>
				</div>
			</div>

			<div class="side-padded less-padding section profile-section radius margintop4">
				<div class="row">
					<div class="large-12 medium-12 small-12 columns">
						<div class="less-padding side-padded section">
						
							<h4 class="l-text text-left light-text">
								Interest

								<div class="add-button">
									<button type="button" class="tiny white button"><i class="fa fa-plus"></i>&nbsp;Add Skill</button>
								</div>
							</h4>

							<div class="no-padding section overlined">
								
								<ul class="no-bullet ps-list">

									<?php $dummy_skills = "Programming, Graphic Design, Caligraphy, Video Editting, Drawing, 2D Animation, 3D Animation"; 
										$dummy_skills = explode(",", $dummy_skills)
									?>
									
									<li class="marginbottom0 margintop2 xs-text grey-text">
										
										@foreach($dummy_skills as $dummy_skill)

											<button class="tiny button">
												{{trim($dummy_skill)}}
											</button>

										@endforeach

										<div class="ps-actions s-text">				
											<a href="#" class="grey-text">
												<i class="fa fa-pencil"></i>
											</a>
										</div>
									</li>

								</ul>
								
							</div>
						

						</div>


					</div>

					<div class="large-12 medium-12 small-12 columns">
						
					</div>
				</div>
			</div>

		</div>

		<div class="large-3 medium-4 small-12 columns">

			<div class="show-for-small-only margintop2">&nbsp;</div>

			
			<div class="side-padded less-padding section radius">
				<ul class="no-bullet">
					<li class="text-center">
						<span class="l-text blue-text">60.5k</span><br>
						<span class="xxs-text uppercase grey-text">Profile Visits This Week</span>
					</li>
				</ul>
			</div>

			<div class="side-padded less-padding section radius margintop4">
				<div class="no-padding section underlined suggested-connections">
					<h4 class="dark-text xs-text">Suggested Connections</h4>
					<ul class="no-bullet">
						<li>
							<a href="javascript:;" class="conn-cancel"><i class="fa fa-times"></i></a>
							<div class="conn-image">
								<img src="{{URL::to("/")}}/assets/img/app/test/people/10.jpg" class="round fullwidthimage">
							</div>
							<div class="conn-data grey-text xs-text">
								Jane Doe<br>
								<span class="light-text xx-s">300k RP</span>
							</div>
							<div class="conn-button margintop1">
								<button type="button" class="expand tiny button marginbottom0"><i class="fa fa-circle-thin"></i>&nbsp;Connect</button>
							</div>
						</li>
						<li>
							<a href="javascript:;" class="conn-cancel"><i class="fa fa-times"></i></a>
							<div class="conn-image">
								<img src="{{URL::to("/")}}/assets/img/app/test/people/9.jpg" class="round fullwidthimage">
							</div>
							<div class="conn-data grey-text xs-text">
								Jon Doe<br>
								<span class="light-text xx-s">260k connections</span>
							</div>
							<div class="conn-button margintop1">
								<button type="button" class="expand tiny success button marginbottom0"><i class="fa fa-circle"></i>&nbsp;Connected</button>
							</div>
						</li>
						<li>
							<a href="javascript:;" class="conn-cancel"><i class="fa fa-times"></i></a>
							<div class="conn-image">
								<img src="{{URL::to("/")}}/assets/img/app/test/people/8.jpg" class="round fullwidthimage">
							</div>
							<div class="conn-data grey-text xs-text">
								Joan Doe<br>
								<span class="light-text xx-s">4.5m reputation</span>
							</div>
							<div class="conn-button margintop1">
								<button type="button" class="expand tiny button marginbottom0"><i class="fa fa-circle-thin"></i>&nbsp;Connect</button>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>
	
</div>

@stop
