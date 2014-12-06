<?php namespace K1\Data\Models;
	
	class Industry extends \Eloquent
	{
		protected $fillable = array('name','slug');

		public $timestamps = false;

		public function organizations() {
			return $this->hasMany('\K1\Data\Models\CorporateProfile', 'industry_id');
		}
	}