<?php 

	use Cartalyst\Sentry\Users\Eloquent\User as SentryModel;

	class User extends SentryModel
	{
		protected $with = array('groups');
	

	    public function profile()
	    {
	    	return $this->hasOne('\K1\Data\Models\Profile','user_id');
	    }

	    public function corporateprofile()
	    {
	    	return $this->hasOne('\K1\Data\Models\CorporateProfile', 'user_id');
	    }

	    public function school()
	    {
	    	return $this->belongsTo('\K1\Data\Models\School','school_id');
	    }

	    public function skills()
	    {
	    	return $this->hasMany('\K1\Data\Models\Skill');
	    }

	    public function qualifications()
	    {
	    	return $this->hasMany('\K1\Data\Models\Qualification');
	    }

	    public function employment()
	    {
	    	return $this->hasMany('\K1\Data\Models\Employment');
	    }

	    protected static function boot() {
		
	        parent::boot();

	        static::deleting(function($user) { // before delete() method call this
	             $user->profile()->delete();
	             $user->corporateprofile()->delete();
	             // do the rest of the cleanup...
	        });
    	}
	}