<?php
	
	class Lga extends Eloquent {

		protected $fillable = array('state_id', 'name', 'slug');

		public function state() {
			return $this->belongsTo('State');
		}
	}