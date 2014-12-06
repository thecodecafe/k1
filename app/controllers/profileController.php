<?php

class profileController extends BaseController {

	public $layout = "layout.app.master";


	public function index()
	{
		$data['menu_style'] = " ";
		$this->layout->content = View::make("pages.app.profiles", $data);
	}
	
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

	public function connections()
	{	
		$data['menu_style'] = " ";
		$this->layout->content = View::make("pages.app.search", $data);
	}

}
