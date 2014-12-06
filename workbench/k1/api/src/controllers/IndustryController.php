<?php namespace K1\Api\Controllers;

	use K1\Api\Controllers\ApiController;
	use K1\Data\Repositories\IndustryRepository;

	class IndustryController extends ApiController
	{
		public function __construct(IndustryRepository $industry) {
			$this->industries = $industry;
		}
		/**
		* Creates a new industry model
		**/
		public function create() {
			//model attributes
			$attr['name'] = \Input::get('name');
			$attr['slug'] = slugify(\Input::get('name'));

			$model = $this->industries->create($attr);

			if($model)
			{
				$newModel = $this->industries->findByKey($model->id);
				return \Response::json(array('status'=>"success",'model'=>$newModel), 200);
			}
		}

		/**
		* Retrieves a industry model(s)
		* @param integer $id
		* industry model id
		* @return json model(s)
		**/
		public function index($id = NULL) {
			if(is_null($id))
			{
				//retrieve all models
				$models = $this->industries->getAll();

				if($models) {
					return \Response::json($models->toArray(), 200);
				}
			}
			else
			{
				$model = $this->industries->findByKey($id);

				if($model) {
					return \Response::json($model->toArray(), 200);
				}
			}
		}

		/**
		* Updates a industry model
		* @param integer $id
		* industry model id
		* @return json
		**/
		public function update($id) {
			//fetch model
			$model = $this->industries->findByKey($id);

			if($model) {
				//model attributes
				$attr['name'] = \Input::get('name');
				$attr['slug'] = slugify(\Input::get('name'));

				$updateModel = $this->industries->update($model, $attr);
				//save model
				if($updateModel)
				{
					return \Response::json(array('status'=> "success", 'model'=> $model), 200);
				}	
			}
		}

		/**
		* Delete a industry model
		* @param integer $id
		* industry model id
		* @return json
		**/
		public function delete($id) {
			$model = $this->industries->findByKey($id);

			if($model) {
				$this->industries->delete($model);
				return \Response::json(array('status' => "success"), 200);
			}
		}	
	}