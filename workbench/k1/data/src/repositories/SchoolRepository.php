<?php namespace K1\Data\Repositories;
	
	use K1\Data\Models\School;
	use anlutro\LaravelRepository\EloquentRepository;

	class SchoolRepository extends EloquentRepository
	{

		public function __construct(School $model) {

			parent::__construct($model);

			$this->model = $model;
		}

		public function afterCreate($model, $attributes) {
			$school = $this->findByKey($model->id);
			if($school->state) {
				return $school;
			}
			else {
				$school->load('state');
				return $school;
			}
		}

		public function afterUpdate($model, $attributes) {
			$school = $this->findByKey($model->id);
			if($school->state) {
				return $school;
			}
			else {
				$school->load('state');
				return $school;
			}
		}

		public function getAll() {
			return $this->model->orderBy('name', 'asc')->get();
		}

		public function findByKey($key) {
			return $this->model->find($key);
		}
	}