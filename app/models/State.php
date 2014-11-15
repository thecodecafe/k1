<?php
	
	class State extends Eloquent
	{
		protected $fillable = array('name','slug');

		public $timestamp = false;

		public function lgas() {
			return $this->hasMany('Lga');
		}

		public function cities() {
			return $this->hasMany('City');
		}

		public function organizations()
		{
			return $this->hasMany('CorporateProfile','state_id');
		}

		public function schools()
		{
			return $this->hasMany('School');
		}
	}