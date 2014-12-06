<?php namespace K1\Data\Models;
	
	class State extends \Eloquent
	{
		protected $fillable = array('name','slug');

		public $timestamp = false;

		public function lgas() {
			return $this->hasMany('\K1\Data\Models\Lga');
		}

		public function cities() {
			return $this->hasMany('City');
		}

		public function organizations()
		{
			return $this->hasMany('\K1\Data\Models\CorporateProfile','state_id');
		}

		public function schools()
		{
			return $this->hasMany('\K1\Data\Models\School');
		}
	}