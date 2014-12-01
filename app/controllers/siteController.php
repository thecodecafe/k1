<?php

class siteController extends BaseController {

	public $layout = "layout.site.master";

	public function index()
	{		
		$this->layout->content = View::make("pages.site.index");
	}

	public function wwd()
	{		
		$this->layout->content =  View::make("pages.site.wwd");
	}

	public function case_study($slug = False)
	{
		if ($slug) {
			
			$this->layout->content =  View::make("pages.site.case_study_single");
		}
		else{
			
			$this->layout->content =  View::make("pages.site.case_study");
		}
	}

	public function login()
	{
		
		$this->layout->content =  View::make("pages.site.login");
	}

	public function signup()
	{
		
		$this->layout->content =  View::make("pages.site.signup");
	}
	

}
