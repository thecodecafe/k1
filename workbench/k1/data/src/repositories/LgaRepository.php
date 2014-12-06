<?php namespace K1\Data\Repositories;
	
	use K1\Data\Models\Lga;
	use anlutro\LaravelRepository\EloquentRepository;

	class LgaRepository extends EloquentRepository
	{

		public function __construct(Lga $model) {

			parent::__construct($model);

			$this->model = $model;
		}

		public function afterCreate($model, $attributes) {
			$lga = $this->findByKey($model->id);
			if($lga->state) {
				return $lga;
			}
			else {
				$lga->load('state');
				return $lga;
			}
		}

		public function afterUpdate($model, $attributes) {
			$lga = $this->findByKey($model->id);
			if($lga->state) {
				return $lga;
			}
			else {
				$lga->load('state');
				return $lga;
			}
		}

		public function getAll() {
			return $this->model->orderBy('name', 'asc')->get();
		}

		public function findByKey($key) {
			return $this->model->find($key);
		}
	}