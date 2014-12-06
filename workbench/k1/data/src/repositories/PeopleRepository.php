<?php namespace K1\Data\Repositories;
	
	use Sentry;
	use User;
	use K1\Data\Models\Group;
	use K1\Data\Models\Profile;
	use K1\Data\Models\CorporateProfile;
	use K1\Data\Repositories\WrongProfileException;
	use anlutro\LaravelRepository\EloquentRepository;

	class PeopleRepository extends EloquentRepository
	{
		/**
		* @param string $sortBy
		* Field to sort by
		* @access public
		**/
		public $sortBy;

		/**
		* @param string $sortOrder
		* Order in which to sort (asc or desc)
		* @access public
		**/
		public $sortOrder;

		protected $profileFields = array('photo','marital_status','state_id','lga_id','sex','phone','street','city_id','school_id');

		protected $corporateProfileFields = array('logo', 'url','industry_id', 'state_id', 'city_id', 'street','phone', 'desc');

		public function __construct(User $model) {

			parent::__construct($model);
			//User model
			$this->model = $model;
		}


		public function findByKey($key)
		{
			$user = $this->model->find($key);

			if($user->type == 1) {
				$user->load('profile');
			}
			elseif($user->type == 2) {
				$user->load('corporateprofile');
			}

			return $user;
		}

		public function getAll()
		{
			$models = $this->model->orderBy($this->sortBy, $this->sortOrder)->get();

			return $models;
		}

		public function getAllInGroup($name)
		{
			$sortBy = $this->sortBy;
			$sortOrder = $this->sortOrder;
			
			$group = Group::with(array('users' => function ($query) use ($sortBy, $sortOrder) {
				$query->orderBy($sortBy, $sortOrder);
			}))->whereName($name)->first();

			return $group->users;
		}

		public function create(array $attrs)
		{	
			if($attrs)
			{
				//validate group - profile selection
				$individuals = array('Interns','Administrators');
				if(in_array($attrs['group'], $individuals) && (int) $attrs['type'] == 2) {
					throw new WrongProfileException("Interns & Administrators cannot have a corporate profile");
				}
				elseif($attrs['group'] == "Corporate" && (int) $attrs['type'] == 1) {
					throw new WrongProfileException("Corporate users cannot have an indiviual profile");
				}

				//Determine which profile model to use
				switch ((int) $attrs['type']) {
					case 1:
						$profile = new Profile;
						$credentials = array(
							'email'=>$attrs['email'],
							'password'=>"passw0rd",
							"first_name"=>$attrs['first_name'],
							"last_name"=>$attrs['last_name'],
							"type" => (int) $attrs['type']
						);
						break;
					
					case 2:
						$profile = new CorporateProfile;
						$credentials = array('email'=>$attrs['email'], 'password'=>"passw0rd", 'name'=> $attrs['name'], "type" => (int) $attrs['type']);
						break;
				}

				//create user
				$user = Sentry::createUser($credentials);
				//find group
				$group = Sentry::findGroupByName($attrs['group']);
				//assign user to group
				$user->addGroup($group);
				//assign profile to user
				$profile->user_id = $user->id;
				//assign profile attributes
				if($user->type == 1) {
					$profileFields = $this->profileFields;
					$profile->dob = (!empty($attrs['profile']['dob'])) ? date("YYYY-mm-dd", strtotime($attrs['profile']['dob'])) : NULL;
					foreach($profileFields as $field) {
						if(!empty($attrs['profile'][$field])) {
							$profile->$field = $attrs['profile'][$field];
						}
					}
				}
				elseif($user->type == 2) {
					$profileFields = $this->corporateProfileFields;
					$profile->slug = slugify($attrs['name']);
					foreach($profileFields as $field) {
						if(!empty($attrs['corporateprofile'][$field])) {
							$profile->$field = $attrs['corporateprofile'][$field];
						}
					}
				}
				//save profile
				if($profile->save()) {
					return $this->findByKey($user->id);
				}
			}
		}

		public function update($entity, array $attrs)
		{
			if($attrs)
			{
				//validate group - profile selection
				$individuals = array('Interns','Administrators');
				if(in_array($attrs['group'], $individuals) && (int) $attrs['type'] == 2) {
					throw new WrongProfileException("Interns & Administrators cannot have a corporate profile");
				}
				elseif($attrs['group'] == "Corporate" && (int) $attrs['type'] == 1) {
					throw new WrongProfileException("Corporate users cannot have an indiviual profile");
				}

				//assign profile attributes
				if($entity->type == 1) {
					$profileFields = $this->profileFields;
					$entity->profile->dob = (!empty($attrs['profile']['dob'])) ? date("YYYY-mm-dd", strtotime($attrs['profile']['dob'])) : NULL;
					foreach($profileFields as $field) {
						if(!empty($attrs['profile'][$field])) {
							$entity->profile->$field = $attrs['profile'][$field];
						}
					}
				}
				elseif($entity->type == 2) {
					$profileFields = $this->corporateProfileFields;
					$entity->corporateprofile->slug = slugify($attrs['name']);
					foreach($profileFields as $field) {
						if(!empty($attrs['corporateprofile'][$field])) {
							$entity->corporateprofile->$field = $attrs['corporateprofile'][$field];
						}
					}
				}

				//save profile
				if($entity->push()) {
					return $this->findByKey($entity->id);
				}
			}
		}
	}