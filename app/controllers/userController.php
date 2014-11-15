<?php

class userController extends \BaseController {

	
	public function index($user_id)
	{
		$data["menu_style"] = "";
		$data["page_title"] = "Daniel Barde's profile | Knowledge First...";
		$data["base_url"] = URL::to("/")."/";
		$data["current_url"] = Request::url()."/";
		$data["current_page"] = "profile";
		$data["user_side"] = "profile";
		
		return View::make("app.pages.user", $data);
	}

}
