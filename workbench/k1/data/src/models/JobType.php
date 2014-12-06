<?php
	
	class JobType extends \Eloquent
	{
		protected $table = "job_types";

		public function jobs() {
			return $this->hasMany('\K1\Data\Models\Job','type_id');
		}
	}