angular.module('ajaxErrorHandler', [])
.factory('ajaxHandlerInterceptor', ['$q', 'toaster', function ($q, toaster) {

	var interceptor = {
		'request': function (config) {
			return config;
		},

		'response': function (response) {
			return response;
		},

		'responseError': function (rejection) {
			console.log(rejection)
			var toastParams = { type: 'error', title: 'Error', text: undefined };

			switch(rejection.status)
			{
				case 404:
					toastParams.text = "Request resource not found";
					break;

				case 500:
					toastParams.text = "Oops!! An error occured on the server";
					break;

				default:
					toastParams.text = "Oops!! An error occured on the server";
					break;
			}

			toaster.pop(toastParams.type, toastParams.title, toastParams.text);

			return $q.reject(rejection);
		}
	};

	return interceptor;
}]);