<div class="dark seaction less-padding side-padded">

	{{Form::open(["url"=>"search", "method"=>"get", "class"=>"topbar-search-form marginbottom0"])}}
		<a href="#" class="white-text only s-text hide-button" title="Hide"><i class="fa fa-times"></i></a>
		{{Form::text("q", "$search_query", ["autocomplete"=>"off", "placeholder" => "Search for jobs, people and companies...", "class" => "white-placeholder"])}}
	{{Form::close()}}

</div>