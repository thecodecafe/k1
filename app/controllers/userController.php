<?php

class userController extends \BaseController {

	public $layout = "app.layout.master";

	
	public function index($user_id)
	{	
		$data['user_tab'] = "user_profile";
		$this->layout->content = View::make("app.pages.user", $data);
	}

}
