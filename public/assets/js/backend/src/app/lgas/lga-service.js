// A RESTful factory for accessing schools
app.factory('lgas', ['$http', function ($http) {

	var self = this,
	url = Site.Config.apiUrl+"lgas"; //API Endpoint

	self.all = function() {
		return $http.get(url);
	};

	self.getAllInState = function(id) {
		var endpoint = Site.Config.apiUrl+"states/"+id+"/lgas";
		return $http.get(endpoint);
	};

	self.get = function(id) {
		return $http.get(url+"/"+id);
	};

	self.create = function(form) {
		return $http.post(url, form);
	};

	self.update = function(id, form) {
		return $http.put(url+"/"+id, form);
	};

	self.delete = function(id) {
		return $http.delete(url+"/"+id);
	};

	return self;
}]);

