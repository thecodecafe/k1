<?php
	
	class Industry extends Eloquent
	{
		protected $fillable = array('name','slug');

		public $timestamp = false;

		public function organizations() {
			return $this->hasMany('CorporateProfile', 'industry_id');
		}
	}