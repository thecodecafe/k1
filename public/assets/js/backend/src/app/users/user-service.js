// A RESTful factory for accessing models
app.factory('users', ['$http', function ($http) {

	var self = this,
	url = Site.Config.apiUrl+"people"; //API Endpoint

	self.all = function(params) {

		if(params !== undefined) {
			var $params = this.serialize(params);
			return $http.get(url+"?"+$params);
		}
		else {
			return $params.get(url);
		}
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

	self.serialize = function(obj) {
		var str = [];
		for(var p in obj) {
		  if (obj.hasOwnProperty(p)) 
		    str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
		}

		return str.join("&");
	}

	return self;
}]);

