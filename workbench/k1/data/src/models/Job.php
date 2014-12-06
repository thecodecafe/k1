<?php
	
	class Job extends \Eloquent
	{
		protected $fillable = array('user_id','state_id','city_id','industry_id','type_id','title','description','requirements');

		public function type() {
			return $this->belongsTo('\K1\Data\Models\JobType','type_id');
		}

		public function user() {

		}

		public function state() {
			return $this->belongsTo('\K1\Data\Models\State', 'state_id');
		}

		public function city() {
			return $this->belongsTo('\K1\Data\Models\City','city_id');
		}

		public function industry() {
			return $this->belongsTo('\K1\Data\Models\Industry');
		}
	}