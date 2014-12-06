<?php namespace K1\Data\Repositories;
	
	use K1\Data\Models\Industry;
	use anlutro\LaravelRepository\EloquentRepository;

	class IndustryRepository extends EloquentRepository
	{

		public function __construct(Industry $model) {

			parent::__construct($model);

			$this->model = $model;
		}

		public function afterCreate($model, $attributes) {
			$industry = $this->findByKey($model->id);
			return $industry;
		}

		public function afterUpdate($model, $attributes) {
			$industry = $this->findByKey($model->id);
			return $industry;
		}

		public function getAll() {
			return $this->model->orderBy('name', 'asc')->get();
		}

		public function findByKey($key) {
			return $this->model->find($key);
		}
	}