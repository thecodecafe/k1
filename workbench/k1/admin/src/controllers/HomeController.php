<?php namespace K1\Admin\Controllers;
	
	use K1\Data\Models\State;
	use K1\Admin\Controllers\AdminController;

	/**
	* Admin Home Controller Class
	**/
	class HomeController extends AdminController
	{
		/**
		* Renders Adminstration App
		* @access public
		**/
		public function index()
		{
			$this->viewdata['user'] = \Sentry::getUser();
			$this->viewdata['states'] = State::orderBy('name','asc')->get();

			return \View::make('admin::app', $this->viewdata);
		}
	}