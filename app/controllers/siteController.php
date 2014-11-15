<?php

class siteController extends \BaseController {

	public $layout = "site.layout.master";

	public function index()
	{		
		$this->layout->content = View::make("site.pages.index");
	}

	public function wwd()
	{		
		$this->layout->content =  View::make("site.pages.wwd");
	}

	public function case_study($slug = False)
	{
		if ($slug) {
			
			$this->layout->content =  View::make("site.pages.case_study_single");
		}
		else{
			
			$this->layout->content =  View::make("site.pages.case_study");
		}
	}

	public function blog()
	{
		
		$this->layout->content =  View::make("site.pages.blog");
	}

	public function login()
	{
		
		$this->layout->content =  View::make("site.pages.login");
	}

	public function signup()
	{
		
		$this->layout->content =  View::make("site.pages.signup");
	}
	

}
