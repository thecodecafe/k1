<?php
	
	class Employment extends Eloquent
	{
		protected $fillable = array('user_id','organization_name','referee_name','referee_phone','start_date','end_date');

		public function user() {
			return $this->belongsTo('User');
		}
	}