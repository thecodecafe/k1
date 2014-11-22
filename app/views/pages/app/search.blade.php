@section('title') Search | Knowledge First... @stop

@section('menu_style')  @stop

@section('current_page') search @stop

@section('user_tab')  @stop

@section("content")

<div class="grey section" >

	<div class="mobile-search-filters show-for-small-only">
		<a href="#" class="msf-trigger"><i class="fa fa-list"></i></a>
		<div class="msf-list-container">

			<div class="no-padding radius2 section">
				<h4 class="m-text text-right marginbottom0"><a href="#" class="msf-trigger2"><i class="fa fa-times"></i></a></h4>

				<div class="section side-padded less-padding underlined">
					<h4 class="xxs-text bold marginbottom1">Show Me</h4>
					<ul class="no-bullet marginbottom0">
						<li class="marginbottom0">
							<label class="xxs-text bold"><input type="checkbox" checked>
								<span>Jobs</span>
							</label>
						</li>
						<li class="marginbottom0">
							<label class="xxs-text bold"><input type="checkbox" checked>
								<span>Individuals</span>
							</label>
						</li>
						<li class="marginbottom0">
							<label class="xxs-text bold"><input type="checkbox" checked>
								<span>Corporations</span>
							</label>
						</li>
					</ul>

				</div>

				<div class="section side-padded less-padding underlined">
					<h4 class="xxs-text bold marginbottom1">Reputation</h4>
					<ul class="no-bullet marginbottom0">
						<li class="marginbottom0">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns">
									<input type="text" placeholder="Minimum" class="marginbottom0">
								</div>
							</div>
						</li>
					</ul>

				</div>

				<div class="section side-padded less-padding underlined">
					<h4 class="xxs-text bold marginbottom1">Salary Range</h4>
					<ul class="no-bullet marginbottom0">
						<li class="marginbottom0">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns">
									<select class="marginbottom0">
										<option value="">30,000 or less</option>
										<option value="">30,000 to 100,000</option>
										<option value="">100,000 to 500,000</option>
										<option value="">500,000 to 1Million</option>
									</select>
								</div>
							</div>
						</li>
					</ul>

				</div>

				<div class="section side-padded less-padding underlined">
					<h4 class="xxs-text bold marginbottom1">Education</h4>
					<ul class="no-bullet marginbottom0">
						<li class="marginbottom0">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns">
									<select class="marginbottom0">
										<option value="">FSLC</option>
										<option value="">O Level</option>
										<option value="">BSc</option>
										<option value="">MSc</option>
										<option value="">Phd</option>
										<option value="">Professtional Certifications</option>
									</select>
								</div>
							</div>
						</li>
					</ul>

				</div>

				<div class="section side-padded less-padding underlined">
					<h4 class="xxs-text bold marginbottom1">Skills</h4>
					<ul class="no-bullet marginbottom0">
						<li class="marginbottom0">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns">
									<a class="tiny default label marginbottom1">Programming&nbsp;<i class="fa fa-times"></i></a> <a class="tiny default label marginbottom1">PHP&nbsp;<i class="fa fa-times"></i></a>
								</div>
								<div class="large-12 medium-12 small-12 columns">
									<input type="text" placeholder="Add skill" class="marginbottom0">
								</div>
							</div>
						</li>
					</ul>

				</div>

				<div class="section side-padded less-padding underlined">
					<h4 class="xxs-text bold marginbottom1">Interests</h4>
					<ul class="no-bullet marginbottom0">
						<li class="marginbottom0">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns">
									<a class="tiny default label marginbottom1">PHP&nbsp;<i class="fa fa-times"></i></a>
									<a class="tiny default label marginbottom1">Laravel&nbsp;<i class="fa fa-times"></i></a>
								</div>
								<div class="large-12 medium-12 small-12 columns">
									<input type="text" placeholder="Add interest" class="marginbottom0">
								</div>
							</div>
						</li>
					</ul>

				</div>

				<div class="section side-padded less-padding">
					<h4 class="xxs-text bold marginbottom1">Corporation</h4>
					<ul class="no-bullet marginbottom0">
						<li class="marginbottom0">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns">
									<select class="marginbottom0">
										<option value="">Corporation 1</option>
										<option value="">Corporation 2</option>
										<option value="">Corporation 3</option>
										<option value="">Corporation 4</option>
										<option value="">Corporation 5</option>
										<option value="">Corporation 6</option>
									</select>
								</div>
							</div>
						</li>
					</ul>

				</div>

			</div>

		</div>
	</div>

	<div class="row">

		<div class="large-2 medium-3 small-12 columns show-for-medium-up">

			<div class="grey radius2 section side-padded less-padding underlined">
				<h4 class="xxs-text bold marginbottom1">Show Me</h4>
				<ul class="no-bullet marginbottom0">
					<li class="marginbottom0">
						<label class="xxs-text bold"><input type="checkbox" checked>
							<span>Jobs</span>
						</label>
					</li>
					<li class="marginbottom0">
						<label class="xxs-text bold"><input type="checkbox" checked>
							<span>Individuals</span>
						</label>
					</li>
					<li class="marginbottom0">
						<label class="xxs-text bold"><input type="checkbox" checked>
							<span>Corporations</span>
						</label>
					</li>
				</ul>

			</div>

			<div class="grey radius2 section side-padded less-padding underlined">
				<h4 class="xxs-text bold marginbottom1">Reputation</h4>
				<ul class="no-bullet marginbottom0">
					<li class="marginbottom0">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<input type="text" placeholder="Minimum" class="marginbottom0">
							</div>
						</div>
					</li>
				</ul>

			</div>

			<div class="grey radius2 section side-padded less-padding underlined">
				<h4 class="xxs-text bold marginbottom1">Salary Range</h4>
				<ul class="no-bullet marginbottom0">
					<li class="marginbottom0">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<select class="marginbottom0">
									<option value="">30,000 or less</option>
									<option value="">30,000 to 100,000</option>
									<option value="">100,000 to 500,000</option>
									<option value="">500,000 to 1Million</option>
								</select>
							</div>
						</div>
					</li>
				</ul>

			</div>

			<div class="grey radius2 section side-padded less-padding underlined">
				<h4 class="xxs-text bold marginbottom1">Education</h4>
				<ul class="no-bullet marginbottom0">
					<li class="marginbottom0">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<select class="marginbottom0">
									<option value="">FSLC</option>
									<option value="">O Level</option>
									<option value="">BSc</option>
									<option value="">MSc</option>
									<option value="">Phd</option>
									<option value="">Professtional Certifications</option>
								</select>
							</div>
						</div>
					</li>
				</ul>

			</div>

			<div class="grey radius2 section side-padded less-padding underlined">
				<h4 class="xxs-text bold marginbottom1">Skills</h4>
				<ul class="no-bullet marginbottom0">
					<li class="marginbottom0">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<a class="tiny default label marginbottom1">Programming&nbsp;<i class="fa fa-times"></i></a> <a class="tiny default label marginbottom1">PHP&nbsp;<i class="fa fa-times"></i></a>
							</div>
							<div class="large-12 medium-12 small-12 columns">
								<input type="text" placeholder="Add skill" class="marginbottom0">
							</div>
						</div>
					</li>
				</ul>

			</div>

			<div class="grey radius2 section side-padded less-padding underlined">
				<h4 class="xxs-text bold marginbottom1">Interests</h4>
				<ul class="no-bullet marginbottom0">
					<li class="marginbottom0">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<a class="tiny default label marginbottom1">PHP&nbsp;<i class="fa fa-times"></i></a>
								<a class="tiny default label marginbottom1">Laravel&nbsp;<i class="fa fa-times"></i></a>
							</div>
							<div class="large-12 medium-12 small-12 columns">
								<input type="text" placeholder="Add interest" class="marginbottom0">
							</div>
						</div>
					</li>
				</ul>

			</div>

			<div class="grey radius2 section side-padded less-padding">
				<h4 class="xxs-text bold marginbottom1">Corporation</h4>
				<ul class="no-bullet marginbottom0">
					<li class="marginbottom0">
						<div class="row">
							<div class="large-12 medium-12 small-12 columns">
								<select class="marginbottom0">
									<option value="">Corporation 1</option>
									<option value="">Corporation 2</option>
									<option value="">Corporation 3</option>
									<option value="">Corporation 4</option>
									<option value="">Corporation 5</option>
									<option value="">Corporation 6</option>
								</select>
							</div>
						</div>
					</li>
				</ul>

			</div>

		</div>

		<div class="large-10 medium-9 small-12 columns">

			<div class="radius2 side-padded less-padding section">

				<h4 class="xs-text underlined">
					Search returned 2,000 results
				</h4>

				<div class="section less-padding underlined">

					<div class="row">
						<div class="large-1 medium-2 small-3 columns">
							<img src="{{URL::to('/')}}/assets/img/app/test/people/7.jpg" class="fullwidthimage round">
						</div>
						<div class="large-11 medium-10 small-9 columns">
							<p class="marginbottom0">
								<a href="profile" class="black-text">John Doe</a><br>
								<span class="grey-text xxs-text">Individual</span>
							</p>
						</div>
					</div>

				</div>

				<div class="section less-padding underlined">

					<div class="row">
						<div class="large-1 medium-2 small-3 columns">
							<img src="{{URL::to('/')}}/assets/img/app/test/people/5.jpg" class="fullwidthimage round">
						</div>
						<div class="large-11 medium-10 small-9 columns">
							<p class="marginbottom0">
								<a href="#" class="black-text">Airtel Nigeria</a><br>
								<span class="grey-text xxs-text">Corporation</span>
							</p>
						</div>
					</div>

				</div>

				<div class="section less-padding underlined">

					<div class="row">
						<div class="large-1 medium-2 small-3 columns">
							<img src="{{URL::to('/')}}/assets/img/app/test/people/3.jpg" class="fullwidthimage round">
						</div>
						<div class="large-11 medium-10 small-9 columns">
							<p class="marginbottom0">
								<a href="#" class="black-text">Full-time PHP Programer</a>
								<span class="light-text bold">(Job)</span><br>
								<a href="#" class="grey-text xxs-text">MTN Nigeria</a>
							</p>
							<p class="xxs-text">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.
							</p>
						</div>
					</div>

				</div>

				<div class="section less-padding underlined">

					<div class="row">
						<div class="large-1 medium-2 small-3 columns">
							<img src="{{URL::to('/')}}/assets/img/app/test/people/2.jpg" class="fullwidthimage round">
						</div>
						<div class="large-11 medium-10 small-9 columns">
							<p class="marginbottom0">
								<a href="#" class="black-text">John Doe</a><br>
								<span class="grey-text xxs-text">Individual</span>
							</p>
						</div>
					</div>

				</div>

				<div class="section less-padding underlined">

					<div class="row">
						<div class="large-1 medium-2 small-3 columns">
							<img src="{{URL::to('/')}}/assets/img/app/test/people/3.jpg" class="fullwidthimage round">
						</div>
						<div class="large-11 medium-10 small-9 columns">
							<p class="marginbottom0">
								<a href="#" class="black-text">Full-time PHP Programer</a>
								<span class="light-text bold">(Job)</span><br>
								<a href="#" class="grey-text xxs-text">MTN Nigeria</a>
							</p>
							<p class="xxs-text">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.
							</p>
						</div>
					</div>

				</div>

				<div class="section less-padding underlined">

					<div class="row">
						<div class="large-1 medium-2 small-3 columns">
							<img src="{{URL::to('/')}}/assets/img/app/test/people/3.jpg" class="fullwidthimage round">
						</div>
						<div class="large-11 medium-10 small-9 columns">
							<p class="marginbottom0">
								<a href="#" class="black-text">Full-time PHP Programer</a>
								<span class="light-text bold">(Job)</span><br>
								<a href="#" class="grey-text xxs-text">MTN Nigeria</a>
							</p>
							<p class="xxs-text">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.
							</p>
						</div>
					</div>

				</div>

				<div class="section less-padding underlined">

					<div class="row">
						<div class="large-1 medium-2 small-3 columns">
							<img src="{{URL::to('/')}}/assets/img/app/test/people/7.jpg" class="fullwidthimage round">
						</div>
						<div class="large-11 medium-10 small-9 columns">
							<p class="marginbottom0">
								<a href="#" class="black-text">John Doe</a><br>
								<span class="grey-text xxs-text">Individual</span>
							</p>
						</div>
					</div>

				</div>

				<div class="section less-padding underlined">

					<div class="row">
						<div class="large-1 medium-2 small-3 columns">
							<img src="{{URL::to('/')}}/assets/img/app/test/people/5.jpg" class="fullwidthimage round">
						</div>
						<div class="large-11 medium-10 small-9 columns">
							<p class="marginbottom0">
								<a href="#" class="black-text">Airtel Nigeria</a><br>
								<span class="grey-text xxs-text">Corporation</span>
							</p>
						</div>
					</div>

				</div>

				<div class="section less-padding underlined">

					<div class="row">
						<div class="large-1 medium-2 small-3 columns">
							<img src="{{URL::to('/')}}/assets/img/app/test/people/3.jpg" class="fullwidthimage round">
						</div>
						<div class="large-11 medium-10 small-9 columns">
							<p class="marginbottom0">
								<a href="#" class="black-text">Full-time PHP Programer</a>
								<span class="light-text bold">(Job)</span><br>
								<a href="#" class="grey-text xxs-text">MTN Nigeria</a>
							</p>
							<p class="xxs-text">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.
							</p>
						</div>
					</div>

				</div>

				<div class="section no-padding margintop2">

					<a href="javascript:;" class="expand tiny white button bold marginbottom0">Load more</a>

				</div>

			</div>

		</div>
	</div>
	
</div>

@stop
