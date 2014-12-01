<?php

class userController extends BaseController {

	public $layout = "layout.app.master";

	
	public function show()
	{	
		$data['menu_style'] = " ";
		$this->layout->content = View::make("pages.app.profile", $data);
	}

	public function search()
	{	
		$data['menu_style'] = " ";
		$this->layout->content = View::make("pages.app.search", $data);
	}

}
