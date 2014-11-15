<?php
	
	class Application extends Eloquent
	{
		protected $fillable = array('job_id','application_id','comments','status');

		public function job() {
			return $this->belongsTo('Job');
		}

		public function applicant() {
			return $this->belongsTo('User');
		}
	}