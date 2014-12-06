<?php namespace K1\Admin\Controllers;
	
	/* Base Admin Controller class */
	class AdminController extends \Controller
	{
		/**
		* Data to be passed to view
		* @param array $viewdata
		* @access protected
		**/
		protected $viewdata = array();

		/**
		* Methods to exempted from the filter
		* @param array $filterExpections
		* @access protected
		**/
		protected $filterExpections = array();

		/**
		* Apply controller or not
		* @param boolean $applyFilter
		* @access public
		**/
		protected $applyFilter = true;


		public function __construct()
		{
			if($this->applyFilter) {
				if($this->filterExpections) {
					$this->beforeFilter('admin-auth', array("except" => $this->filterExpections));
				}
				else {
					$this->beforeFilter('admin-auth');	
				}
			}
		}
	}