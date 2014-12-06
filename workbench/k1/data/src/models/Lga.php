<?php namespace K1\Data\Models;
	
	class Lga extends \Eloquent {

		protected $fillable = array('state_id', 'name', 'slug');

		protected $with = array('state');

		public $timestamps = false;

		public function state() {
			return $this->belongsTo('\K1\Data\Models\State');
		}
	}