<?php

class userController extends \BaseController {

	public $layout = "layout.app.master";

	
	public function index($user_id)
	{	
		$data['user_tab'] = "profile";
		$data['menu_style'] = " ";
		$this->layout->content = View::make("pages.app.profile", $data);
	}

}
