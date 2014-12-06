<?php namespace K1\Data\Models;
	
	class School extends \Eloquent
	{
		protected $fillable = array('state_id','name','type','ownership');

		public $timestamps = false;

		protected $with = array('state');

		public function state() {
			return $this->belongsTo('\K1\Data\Models\State');
		}
	}