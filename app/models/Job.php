<?php
	
	class Job extends Eloquent
	{
		protected $fillable = array('user_id','state_id','city_id','industry_id','type_id','title','description','requirements');

		public function type() {
			return $this->belongsTo('JobType','type_id');
		}

		public function user() {

		}

		public function state() {
			return $this->belongsTo('State', 'state_id');
		}

		public function city() {
			return $this->belongsTo('city','city_id');
		}

		public function industry() {
			return $this->belongsTo('Industry');
		}
	}