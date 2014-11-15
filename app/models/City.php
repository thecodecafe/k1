<?php
	
	class City extends Eloquent
	{
		protected $fillable = array('state_id', 'name', 'slug');

		public function state()
		{
			return $this->belongsTo('State');
		}

		public function organizations()
		{
			return $this->hasMany('CorporateProfile','city_id');
		}
	}