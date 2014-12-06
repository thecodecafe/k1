<?php namespace K1\Data\Models;
	
	class CorporateProfile extends \Eloquent
	{
		protected $table = "corporate_profiles";

		protected $fillable = array(
			'user_id','logo', 'url', 'slug',
			'industry_id', 'state_id', 'city_id', 'street',
			'phone', 'desc'
		);

		public function user() {
			return $this->belongsTo('\User', 'user_id');
		}
		
		public function state() {
			return $this->belongsTo('\K1\Data\Models\State', 'state_id');
		}

		public function city() {
			return $this->belongsTo('\K1\Data\Models\City','city_id');
		}

		public function industry() {
			return $this->belongsTo('\K1\Data\Models\Industry','industry_id');
		}
	}