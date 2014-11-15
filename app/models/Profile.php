<?php
	
	class Profile extends Eloquent {

		protected $fillable = array('user_id','photo','marital_status','dob','state_id','lga_id','sex','phone','street','city_id','school_id');
	}