<?php namespace K1\Data\Repositories;
	
	use K1\Data\Models\City;
	use anlutro\LaravelRepository\EloquentRepository;

	class CityRepository extends EloquentRepository
	{

		public function __construct(City $model) {

			parent::__construct($model);

			$this->model = $model;
		}

		public function afterCreate($model, $attributes) {
			$city = $this->findByKey($model->id);
			if($city->state) {
				return $city;
			}
			else {
				$city->load('state');
				return $city;
			}
		}

		public function afterUpdate($model, $attributes) {
			$city = $this->findByKey($model->id);
			if($city->state) {
				return $city;
			}
			else {
				$city->load('state');
				return $city;
			}
		}

		public function getAll() {
			return $this->model->orderBy('name', 'asc')->get();
		}

		public function findByKey($key) {
			return $this->model->find($key);
		}
	}