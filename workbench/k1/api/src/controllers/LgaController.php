<?php namespace K1\Api\Controllers;

	use K1\Api\Controllers\ApiController;
	use K1\Data\Repositories\LgaRepository;

	class LgaController extends ApiController
	{
		public function __construct(LgaRepository $lga) {
			$this->lga = $lga;
		}

		/**
		* Creates a new lga model
		**/
		public function create() {
			//model attributes
			$attr['name'] = \Input::get('name');
			$attr['slug'] = slugify(\Input::get('name'));
			$attr['state_id'] = \Input::get('state_id');

			$model = $this->lga->create($attr);
			//save model
			if($model)
			{
				$newModel = $this->model->findByKey($model->id);
				return \Response::json(array('status'=> "success", 'model'=> $newModel), 200);
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
				$models = $this->lga->getAll();

				if($models) {
					return \Response::json($models->toArray(), 200);
				}
			}
			else
			{
				$model = $this->lga->findByKey($id);

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

			$model = $this->lga->findByKey($id);

			if($model) {
				//model attributes
				$attr['name'] = \Input::get('name');
				$attr['slug'] = slugify(\Input::get('name'));
				$attr['state_id'] = \Input::get('state_id');

				$update = $this->lga->update($model, $attr);
				//save model
				if($update)
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

			$model = $this->lga->findByKey($id);

			if($model) {
				$this->lga->delete($model);
				return \Response::json(array('status' => "success"));
			}
		}	
	}