<?php namespace K1\Data\Models;

	class City extends \Eloquent
	{
		protected $with = array('state');
		
		protected $fillable = array('state_id', 'name', 'slug');

		public function state()
		{
			return $this->belongsTo('\K1\Data\Models\State');
		}

		public function organizations()
		{
			return $this->hasMany('\K1\Data\Models\CorporateProfile','city_id');
		}
	}