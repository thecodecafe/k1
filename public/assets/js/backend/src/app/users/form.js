app.controller('UserFormCtrl', [
	'$scope', 'users', 'lgas',
	'schools', 'cities', 'industries',
	'$filter','toaster', 'FileUploader','$stateParams',
	function($scope, users, lgas, schools, cities, industries, $filter, toaster, FileUploader, $stateParams) {
		
	$scope.id = $stateParams.user;
	$scope.user = {};
	//set up uploader
	$scope.uploader = new FileUploader({
        url: Site.Config.url+"/upload",
        queueLimit: 1
    });

    $scope.uploader.onAfterAddingFile = function(fileItem) {
        console.info('queue', this.queue[0]);
    };

	$scope.mode; //form mode

	$scope.groups = [
		{name: 'Administrators'},
		{name: 'Interns'},
		{name: 'Corporate'},
	];

	$scope.types = [
		{name: "Individual", id: "1"},
		{name: "Corporate", id: "2"}
	];

	$scope.genders = [
		{name: "Female", id: "female"},
		{name: "Male", id: "male"}
	];

	$scope.statuses = [
		{name: "Single", id: "single"},
		{name: "Married", id: "married"},
		{name: "Divorced", id: "divorced"}
	];

	//Data sets
	$scope.states = [];
	$scope.cities = [];
	$scope.schools = [];
	$scope.industries = [];
	$scope.schoolplaceholder = "Enter school name";

	$scope.lgas = [];
	$scope.lgaplaceholder = "Select LGA";

	$scope.format = "yyyy-MM-dd";

	$scope.dateOptions = {
      formatYear: 'yyyy',
      formatDay: 'dd',
      startingDay: 1,
      class: 'datepicker'
    };

	$scope.type = {};
	$scope.type.selected = null;

	$scope.sex = {};
	$scope.sex.selected = null;

	$scope.status = {};
	$scope.status.selected = null;

	$scope.showSchool = false;

	$scope.help = {
		accountType: {
			text: 'Select an account type depending on the type user; Administrators, Interns, Corporate bodies'
		},
		profileType: {
			text: 'Individual for administrators, interns, Corporate for companies, agencies, firms'
		}
	};

	$scope.save = function() {
		//Individual select options
		if($scope.user.profile) {
			if($scope.states.selected) $scope.user.profile.state_id = $scope.states.selected.id;
			if($scope.cities.selected) $scope.user.profile.city_id = $scope.cities.selected.id;
			if($scope.lgas.selected) $scope.user.profile.lga_id = $scope.lgas.selected.id;
			if($scope.status.selected) $scope.user.profile.marital_status = $scope.status.selected.id;
			if($scope.sex.selected) $scope.user.profile.sex = $scope.sex.selected.id;
			if($scope.schools.selected) $scope.user.profile.school_id = $scope.schools.selected.id;
		}
		//Corporate select options
		if($scope.user.corporateprofile) {
			if($scope.industries.selected) $scope.user.corporateprofile.industry_id = $scope.industries.selected.id;
			if($scope.cities.selected) $scope.user.corporateprofile.city_id = $scope.cities.selected.id;
		}
		//User group
		$scope.user.group = $scope.groups.selected.name;
		//Profile type
		$scope.user.type = $scope.type.selected.id;
		//Show wait toast
      	var toastParams = { type: 'wait', title: 'Status', text: "Saving...", timeout: 0 };
      	toaster.clear();
      	toaster.pop(toastParams.type, toastParams.title, toastParams.text);

		if($scope.mode == "create")
		{
			users.create($scope.user).
			success($scope.saveSuccess);
		}
		else if($scope.mode == "edit")
		{
			users.update($scope.id, $scope.user).
			success($scope.saveSuccess);
		}

		console.log($scope);
	};

	$scope.saveSuccess = function (res) {
		if(res.status == "success") {
			//show success toast
			toaster.pop('success', 'Success', "Save Successfull!", 3000);
			$scope.user = res.model;

			$scope.groups.selected = $scope.setGroup($scope.user.groups[0]);
			$scope.type.selected = $scope.setProfileType($scope.user.type);

			if($scope.user.type == 1) {
				$scope.sex.selected = $scope.setGender($scope.profile.sex);
				$scope.status.selected = $scope.setStatus($scope.profile.marital_status);
				$scope.states.selected = $scope.setState($scope.profile.state_id);
				$scope.cities.selected = $scope.setCity($scope.profile.city_id);
				$scope.lgas.selected = $scope.setLga($scope.profile.lga_id);

				if($scope.groups.selected.name == "Interns")
					$scope.schools.selected = $scope.setSchool($scope.user.profile.school_id);
			}
			else {
				$scope.industries.selected = $scope.setIndustry($scope.corporateprofile.industry_id);
				$scope.cities.selected = $scope.setCity($scope.corporateprofile.city_id);
			}
		}
		else if(res.status == "error") {
			var text = "";
			if(res.messages) {
				angular.forEach(res.messages, function(message) {
					text += message+'<br>';
				});
				toaster.pop('error','Error',text.toString(), 3000, 'trustedHtml');
			}

			if(res.message) {
				toaster.pop('error','Error',res.message, 3000);
			}
		}	
	};

	$scope.open = function($event) {
      $event.preventDefault();
      $event.stopPropagation();
      $scope.opened = true;
    };

	$scope.setProfileType = function (select) {
		var stype;
		angular.forEach($scope.types, function(type) {
			if(type.id == select) {
				stype = type;
			}
		})

		return stype;
	};

	$scope.setGender = function (sex) {
		var gender;
		angular.forEach($scope.genders, function(gnd) {
			if(gnd.id == sex) {
				gender = gnd;
			}
		})

		return gender;
	};

	$scope.setGroup = function (group) {
		var grp;
		angular.forEach($scope.groups, function(g) {
			if(g.name = group.name) {
				grp = g;
			}
		});
		return grp;
	};

	$scope.setState = function (id) {
		var $state;
		angular.forEach($scope.states, function(state) {
			if(state.id == id) { $state = state }
		});

		return $state;
	};

	$scope.setLga = function (id) {
		var $lga;
		angular.forEach($scope.lgas, function(lga) {
			if(lga.id == id) { $lga = lga }
		});

		return $lga;
	};

	$scope.setCity = function (id) {
		var $city;
		angular.forEach($scope.cities, function(city) {
			if(state.id == id) { $city = city}
		});

		return $city;
	}

	$scope.setIndustry = function (id) {
		var $industry;
		angular.forEach($scope.industries, function(industry) {
			if(industry.id == id) { $industry = industry }
		});

		return $industry;
	};

	$scope.setStatus = function (status) {
		var selectedStatus;
		angular.forEach($scope.statuses, function(sta) {
			if(sta.id == status) { selectedStatus = sta}
		});

		return selectedStatus;
	};
	
	$scope.fetch = function() {
		if(typeof $scope.id !== "undefined") {
			$scope.mode = "edit";
			users.get($scope.id).
			success(function (res) {
				if(res)
				{ 
					$scope.user = res;

					$scope.groups.selected = $scope.setGroup($scope.user.groups[0]);
					$scope.type.selected = $scope.setProfileType(res.type);

					if($scope.user.profile) { 
						$scope.sex.selected = $scope.setGender(res.profile.sex);
						$scope.status.selected = $scope.setStatus(res.profile.marital_status);
					}

					if($scope.user.corporateprofile) {
						$scope.industries.selected = $scope.setIndustry($scope.user.corporateprofile.industry_id);
					}

				}
			});
		}
		else {
			$scope.mode = "create";
		}
	};	

	$scope.fetchLgas = function($item, $model) {
		$scope.lgaplaceholder = "Loading lgas...";
		lgas.getAllInState($model.id).
		success(function (res) {
			if(!res.status)
			{
				if(res.length > 0)
				{
					$scope.lgas = [];
					angular.forEach(res, function(lga) { $scope.lgas.push(lga) });
					$scope.lgaplaceholder = "Select LGA";
				}
			}
			else
			{
				toaster.pop('error','Error',res.message);
			}
		});
	};

	$scope.populate = function($item, $model) {
		if($item.name == "Interns")
		{
			$scope.schools = [];
			schools.all().success(function (res) {
				if(res.length > 0) {
					angular.forEach(res, function(school) { $scope.schools.push(school) });
				}
			});

			$scope.showSchool = true;
		}
	};

	$scope.populateStates = function() {
      	var states = Site.data.states;
      	var $states = angular.fromJson(states);
     
    	angular.forEach($states, function(state) {
        	$scope.states.push(state)
     	});
  	};

  	$scope.populateCities = function() {
  		cities.all().success(function(res) {
  			if(res.length > 0) {
  				angular.forEach(res, function(city) { $scope.cities.push(city) });
  			}
  		})
  	};

  	$scope.populateIndustries = function() {
		industries.all().success(function (res) {
			if(res.length > 0) angular.forEach(res, function(industry) { $scope.industries.push(industry) });
		})
  	};

	$scope.$on('user:fetch', $scope.fetch);
	$scope.$on('populate:states', $scope.populateStates);
	$scope.$on('populate:cities', $scope.populateCities);
	$scope.$on('populate:industries', $scope.populateIndustries);

	$scope.$broadcast('populate:states');
	$scope.$broadcast('populate:cities');
	$scope.$broadcast('populate:industries');
	$scope.$broadcast('user:fetch');
}])