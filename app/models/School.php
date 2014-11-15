<?php
	
	class School extends Eloquent
	{
		protected $fillable = array('state_id','name','type','ownership');

		public function state() {
			return $this->belongsTo('State');
		}
	}