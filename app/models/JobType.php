<?php
	
	class JobType extends Eloquent
	{
		protected $table = "job_types";

		public function jobs() {
			return $this->hasMany('Job','type_id');
		}
	}