<?php
	
	class CorporateProfile extends Eloquent
	{
		protected $table = "corporate_profiles";

		protected $fillable = array(
			'user_id', 'name', 'logo', 'url', 'slug',
			'industry_id', 'state_id', 'city_id', 'street',
			'phone', 'desc'
		);

		public function user() {
		}
		
		public function state() {
			return $this->belongsTo('State', 'state_id');
		}

		public function city() {
			return $this->belongsTo('city','city_id');
		}

		public function industry() {
			return $this->belongsTo('industry','industry_id');
		}
	}