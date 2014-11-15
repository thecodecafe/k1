<?php
	
	class Skill extends Eloquent
	{
		protected $fillable = array('user_id','name','desc');

		public function user() {
			return $this->belongsTo('User');
		}
	}