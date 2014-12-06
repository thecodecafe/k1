<?php namespace K1\Api\Controllers;

	use K1\Api\Controllers\ApiController;
	use K1\Data\Repositories\SchoolRepository;
	
	class SchoolController extends ApiController {

		protected $attributes = array('name','type','ownership', 'state_id');

		public function __construct(SchoolRepository $school) {
			$this->school = $school;
		}
		/**
		* Retrieves a school model(s)
		* @param $id integer
		* id of the school
		* @return json
		**/
		public function index($id = null) {

			if(is_null($id))
			{
				//fetch models
				$schools = $this->school->getAll();
				//return response
				return \Response::json($schools->toArray(), 200);
			}
			else
			{
				//fetch model
				$school = $this->school->findByKey($id);
				//return
				return \Response::json($school->toArray(), 200);
			}
		}


		/**
		* Creates a new school model
		**/
		public function create() {
			//new model attributes
			$attr = array();
			//set attributes
			foreach($this->attributes as $attribute) {
				$attr[$attribute] = \Input::get($attribute);
			}

			$school = $this->school->create($attr);
			if($school)
			{
				$model = $this->school->findByKey($school->id);
				return \Response::json(array('status' => "success", 'model'=>$model));
			}
		}


		/**
		* Updates a school model
		**/
		public function update($id) {
			//fetch the model
			$model = $this->school->findByKey($id);

			if($model)
			{
				$attr = array();
				foreach($this->attributes as $attribute) {
					$attr[$attribute] = \Input::get($attribute);
				}

				$school = $this->school->update($model, $attr);
				if($school)
				{
					return \Response::json(array('status' => "success", 'model'=> $school));
				}
			}
			else
			{
				return \Response::json(array('status'=>"error", "message"=> "Model not found"), 404);
			}
		}


		/**
		* Delete a school model
		**/
		public function delete($id) {
			//fetch the model
			$model = $this->school->findByKey($id);
			if($model)
			{
				$this->school->delete($model);
				return \Response::json(array('status' => "success"));
			}
		}
 	}	