<?php namespace K1\Api\Controllers;

	use K1\Api\Controllers\ApiController;
	use K1\Data\Repositories\CityRepository;

	class CityController extends ApiController
	{
		public function __construct(CityRepository $city) {
			$this->city = $city;
		}
		/**
		* Creates a new lga model
		**/
		public function create() {
			//model attributes
			$attr['name'] = \Input::get('name');
			$attr['slug'] = slugify(\Input::get('name'));
			$attr['state_id'] = \Input::get('state_id');
			//create model
			$model = $this->city->create($attr);
			//return response
			if($model) {
				return \Response::json(array('status'=>"success", 'model'=> $model), 200);
			}
		}

		/**
		* Retrieves a lga model(s)
		* @param integer $id
		* lga model id
		* @return json model(s)
		**/
		public function index($id = NULL) {

			if(is_null($id))
			{
				//retrieve all models
				$models = $this->city->getAll();

				if($models) {
					return \Response::json($models->toArray(), 200);
				}
			}
			else
			{
				$model = $this->city->findByKey($id);

				if($model) {
					return \Response::json($model->toArray(), 200);
				}
			}
		}

		/**
		* Updates a lga model
		* @param integer $id
		* lga model id
		* @return json
		**/
		public function update($id) {

			//fetch model
			$model = $this->city->findByKey($id);

			if($model) {
				//model attributes
				$attr['name'] = \Input::get('name');
				$attr['slug'] = slugify(\Input::get('name'));
				$attr['state_id'] = \Input::get('state_id');

				$updateModel = $this->city->update($model, $attr);
				//save model
				if($updateModel)
				{
					return \Response::json(array('status'=> "success", 'model'=> $model), 200);
				}	
			}
		}

		/**
		* Delete a lga model
		* @param integer $id
		* lga model id
		* @return json
		**/
		public function delete($id) {

			$model = $this->city->findByKey($id);

			if($model) {
				$this->city->delete($model);
				return \Response::json(array('status' => "success"));
			}
		}	
	}