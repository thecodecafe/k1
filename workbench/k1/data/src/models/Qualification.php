<?php namespace K1\Data\Models;
	
	class Qualification extends \Eloquent
	{
		protected $fillable = array('user_id','school_id','certificate_id','course','start_year','end_year');

		public function user() {
			return $this->belongsTo('\K1\Data\Models\User');
		}
	}