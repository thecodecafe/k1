<?php

class siteController extends \BaseController {

	
	public function index()
	{
		$data["menu_style"] = "white";
		$data["page_title"] = "Knowledge First...";
		$data["base_url"] = URL::to("/")."/";
		$data["current_url"] = Request::url()."/";
		$data["current_page"] = "index";
		
		return View::make("site.pages.index", $data);
	}

	public function wwd()
	{
		$data["menu_style"] = "";
		$data["page_title"] = "What We Do :: Knowledge First...";
		$data["base_url"] = URL::to("/")."/";
		$data["current_url"] = Request::url()."/";
		$data["current_page"] = "wwd";
		
		return View::make("site.pages.wwd", $data);
	}

	public function case_study($slug = False)
	{
		if ($slug) {

			$data["menu_style"] = "";
			$data["page_title"] = "Total Petroleum Ltd - Case Study :: Knowledge First...";
			$data["base_url"] = URL::to("/")."/";
			$data["current_url"] = Request::url()."/";
			$data["current_page"] = "case-study";
			
			return View::make("site.pages.case_study_single", $data);
		}
		else{

			$data["menu_style"] = "";
			$data["page_title"] = "Case Study :: Knowledge First...";
			$data["base_url"] = URL::to("/")."/";
			$data["current_url"] = Request::url()."/";
			$data["current_page"] = "case-study";
			
			return View::make("site.pages.case_study", $data);
		}
	}

	public function blog()
	{
		$data["menu_style"] = "";
		$data["page_title"] = "Press Release :: Knowledge First...";
		$data["base_url"] = URL::to("/")."/";
		$data["current_url"] = Request::url()."/";
		$data["current_page"] = "blog";
		
		return View::make("site.pages.blog", $data);
	}

	public function login()
	{
		$data["menu_style"] = "";
		$data["page_title"] = "Login :: Knowledge First...";
		$data["base_url"] = URL::to("/")."/";
		$data["current_url"] = Request::url()."/";
		$data["current_page"] = "login";
		
		return View::make("site.pages.login", $data);
	}

	public function signup()
	{
		$data["menu_style"] = "";
		$data["page_title"] = "Sign up :: Knowledge First...";
		$data["base_url"] = URL::to("/")."/";
		$data["current_url"] = Request::url()."/";
		$data["current_page"] = "signup";
		
		return View::make("site.pages.signup", $data);
	}
	

}
