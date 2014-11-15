<?php
	use Cartalyst\Sentry\Users\Eloquent\User as SentryModel;

	class User extends SentryModel
	{
		public function profile()
	    {
	    	return $this->hasOne('Profile');
	    }

	    public function school()
	    {
	    	return $this->belongsTo('School','school_id');
	    }

	    public function skills()
	    {
	    	return $this->hasMany('Skill');
	    }

	    public function qualifications()
	    {
	    	return $this->hasMany('Qualification');
	    }

	    public function employment()
	    {
	    	return $this->hasMany('Employment');
	    }
	}