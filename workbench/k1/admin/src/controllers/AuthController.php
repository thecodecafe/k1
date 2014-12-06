<?php namespace K1\Admin\Controllers;
	
	use K1\Admin\Controllers\AdminController;

	class AuthController extends AdminController
	{
		protected $applyFilter = false;

		/**
		* Display login screen
		**/
		public function showLogin()
		{
			$this->viewdata['message'] = \Session::get('message');

			return \View::make('admin::login', $this->viewdata);
		}

		/**
		* Authenticate user
		**/
		public function authenticate()
		{
			//Form attributes
			$attributes = \Input::all();

			//validation rules
			$rules = array("email"=>"email|required", "password"=>"required");

			//validation
			$validation = \Validator::make($attributes, $rules);
			//if validation fails
			if($validation->fails()) {
				return \Redirect::to('admin/login')->withErrors($validation);
			}
			//if validation is successfull
			else
			{
				try {

					$credentials = array(
						"email" => \Input::get('email'),
						"password" => \Input::get('password')
					);

					$remember = (bool) \Input::get('remember', false);

					// Try to authenticate the user
		    		$user = \Sentry::authenticate($credentials, $remember);

		    		//redirect
		    		return \Redirect::to('admin');
		    	}
				catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
				{
				   \Session::flash('message', 'Incorrect Password');
				   return \Redirect::to('admin/login');
				}
				catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
				{
					\Session::flash('message', 'Invalid email and password combination');
					return \Redirect::to('admin/login');
				}
				catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
				{
					\Session::flash('message', 'This account has not been activated');
					return \Redirect::to('admin/login');
				}
			}
		}
	}