<?php namespace K1\Api\Controllers;
	
	use K1\Api\Controllers\ApiController;
	use K1\Data\Repositories\PeopleRepository;

	class PeopleController extends ApiController
	{
		protected $validationRules = array(
			"individual" => array(
				'first_name' => 'required',
				'last_name' => 'required',
				//'email' => 'required|unique:users,email',
			),
			"corporate" => array(
				//'name' => 'required|unique:corporate_profiles,name',
				'email' => 'required',
			)
		);

		protected $validationMessage = array(
			"individual" => array(
				'first_name.required' => "First name field is required",
				'last_name.required' => "Last name field is required",
				'email.required' => "Email field is required",
				'email.unique' => "Email already in use"
			),

			"corporate" => array(
				'name.required' => "Name field is required",
				'name.unique' => "Name already in use",
				'email.required' => "Email field is required",
				'email.unique' => "Email already in use"
			)
		);

		public function __construct(PeopleRepository $people) {
			$this->people = $people;
		}

		private function setValidationRules($type) {
			if((int) $type == 1) {
				return $this->validationRules['individual'];
			}
			elseif((int) $type == 2) {
				return $this->validationRules['corporate'];
			}
		}

		private function setValidationMessages($type) {
			if((int) $type == 1) {
				return $this->validationMessage['individual'];
			}
			elseif((int) $type == 2) {
				return $this->validationMessage['corporate'];
			}
		}

		/**
		* Retrieve user model(s)
		* @param integer $id
		* Default NULL
		* @access public
		* @return json
		**/
		public function index($id = NULL)
		{
			if(is_null($id))
			{
				//parameters
				$sortBy = \Input::get('sortBy','last_name');
				$sortOrder = \Input::get('sortOrder','asc');
				$group = (\Input::get('group') != NULL) ? ucwords(\Input::get('group')) : '';

				//set filters
				$this->people->sortBy = $sortBy;
				$this->people->sortOrder = $sortOrder;

				if($group != '')
				{
					//fetch users
					$users = $this->people->getAllInGroup($group);
				}
				else
				{
					//fetch users
					$users = $this->people->getAll();
				}

				return \Response::json($users->toArray(), 200);
			}
			else
			{
				//find user
				$user = $this->people->findByKey($id);
				if($user)
					return \Response::json($user->toArray(), 200);
				else
					return \Response::json(array('status'=>"error", 'message'=>"User not found!"), 404);
			}
		}

		public function create()
		{
			$input = \Input::all();
			//get validation rules
			$rules = $this->setValidationRules($input['type']);
			//get validation messages
			$messages = $this->setValidationMessages($input['type']);
			//validation
			$validation = \Validator::make($input, $rules, $messages);
			//run validation
			if($validation->fails())
			{
				$messages = $validation->messages();
				//return response
				return \Response::json(array('status'=>"error", 'messages'=> $messages), 200);
			}
			else
			{
				$user = $this->people->create($input);
				if($user) {
					return \Response::json(array('status' => "success", 'model' => $user->toArray()));
				}
			}
		}

		public function update($id)
		{
			$user = $this->people->findByKey($id);
			if($user)
			{
				$input = \Input::all();
				//get validation rules
				$rules = $this->setValidationRules($input['type']);
				//get validation messages
				$messages = $this->setValidationMessages($input['type']);
				//validation
				$validation = \Validator::make($input, $rules, $messages);
				//run validation
				if($validation->fails())
				{
					$messages = $validation->messages();
					//return response
					return \Response::json(array('status'=>"error", 'messages'=> $messages), 200);
				}
				else
				{
					$user = $this->people->update($user, $input);
					if($user) {
						return \Response::json(array('status' => "success", 'model' => $user->toArray()));
					}
				}
			}
			else
			{
				return \Response::json(array('status' => "success", 'model' => $user->toArray()));
			}
		}

		/**
		* Delete user model
		* @param integer $id
		* @access public
		* @return json
		**/
		public function delete($id)
		{
			//find model
			$model = \User::find($id);

			if($model)
			{
				$model->delete();
				//return response
				return \Response::json(array('status' => "success", 'message' => "User account successfully deleted!"), 200);
			}
		}
	}