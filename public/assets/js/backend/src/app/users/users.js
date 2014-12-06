app.controller('UsersCtrl', ['$scope', 'users', '$filter', 'toaster', function($scope, users, $filter, toaster) {

	$scope.groups = [
		{name: "All Users", filter: '', title: "All user accounts"},
		{name: 'Administrators', filter: 'administrators', title: "Administrators user accounts"},
		{name: 'Interns', filter: 'interns', title: "Intern Accounts"},
		{name: 'Corporate', filter: 'corporate', title: "Corporate user accounts"},
	];
}]);

app.controller('UserListCtrl', ['$scope', 'users', '$filter', 'toaster', '$stateParams', function($scope, users, $filter, toaster, $stateParams) {
	$scope.group = $stateParams.group;

	$scope.users = [];
	$scope.statusShow = true;
    $scope.statusText = "";
    $scope.showData = false;

    $scope.query = '';
    $scope.sortby = 'last_name';
    $scope.activeSort = 'Last Name';

    $scope.sortFields = [
    	{ name: "First Name", field: 'first_name' },
    	{ name: "Last Name", field: 'last_name' },
    	{ name: "Last Login", field: 'last_login'} 
    ];

    $scope.sortBy = function (field) {
    	$scope.sortby = field;

    	angular.forEach($scope.sortFields, function(sort) {
    		if(sort.field == field)
    			$scope.activeSort = sort.name;
    	});

    	$scope.$broadcast('users:fetch');
    };

    $scope.delete = function (user) {
		var prompt = window.confirm('Are sure you want to delete this account? This will remove all user account information.');

		if(prompt) {
			users.delete(user.id).
			success(function (res)
			{
				if(res.status == "success") {
					//remove model
					var users = $scope.users.filter(function (el) {
						return el.id !== user.id;
					});

					$scope.users = users;
				}
			});
		}
	};

	$scope.fetch = function() {

		if($scope.group === undefined || $scope.group === '') 
			//query param
			var params = { sortBy: $scope.sortby };
		else 
			var params = { group: $scope.group, sortBy: $scope.sortby };

		$scope.statusText = "Loading, please wait..";
		users.all(params).success(function (res) {
			$scope.statusShow = false;

			if(res.length > 0)
			{
				$scope.users = [];
				angular.forEach(res, function(user) { $scope.users.push(user); })	
				$scope.showData = true;
			}
			else {
				$scope.showData = false;
				$scope.statusText = "No users found!";
				$scope.statusShow = true;
			}
		});
	};

	$scope.$on('users:fetch', $scope.fetch);
	$scope.$broadcast('users:fetch');
}]);

app.controller('UserCtrl', ['$scope', 'users', '$filter', 'toaster', '$stateParams', function($scope, users, $filter, toaster, $stateParams) {
	$scope.userid = $stateParams.user;
	$scope.user;

	users.get($scope.userid)
	.success(function (res) {

	})
}]);