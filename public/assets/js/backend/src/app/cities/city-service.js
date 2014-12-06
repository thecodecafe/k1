// A RESTful factory for accessing schools
app.factory('cities', ['$http', function ($http) {

	var self = this,
	url = Site.Config.apiUrl+"cities"; //API Endpoint

	self.all = function() {
		return $http.get(url);
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

