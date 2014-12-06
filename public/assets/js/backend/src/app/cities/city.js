app.controller('CityCtrl', ['$scope', 'cities', '$filter', 'toaster', function($scope, cities, $filter, toaster) {

	$scope.state = { selected: null };
	$scope.states = [];
	$scope.cities = [];

	$scope.query;
	$scope.statusShow = true;
    $scope.statusText = "";
    $scope.filter = '';

    $scope.selectGroup = function(item){    
      angular.forEach($scope.states, function(item) {
         item.selected = false;
      });

      $scope.group = item;
      $scope.states.selected = true;
      $scope.filter = item.name;
    };

    $scope.selectCity = function(item){    

      angular.forEach($scope.cities, function(item) {
         item.selected = false;
         item.editing = false;
      });

      $scope.item = item;
      $scope.item.selected = true;
      $scope.states.selected = $scope.item.state;
    };

   	$scope.editItem = function(item){
      $scope.mode = "edit";
      if(item && item.selected){
         item.editing = true;
      }
    };

    $scope.doneEditing = function(item){
      //Show wait toast
      var toastParams = { type: 'wait', title: 'Status', text: "Saving...", timeout: 0 };
      toaster.pop(toastParams.type, toastParams.title, toastParams.text);

      //form data
      var form = { name: $scope.item.name, state_id: $scope.state.selected.id };
   
      if($scope.mode == "edit")
      {
         //ajax request
         cities.update(item.id, form)
         .success(function (response) {
            //clear toast
            toaster.clear()

            if(response.status == "success") {
               $scope.item = response.model;

               toastParams.type = 'success';
               toastParams.title = "Success";
               toastParams.text = "City updated successfully!";
               toaster.timeout = 3000;

               toaster.pop(toastParams.type, toastParams.title, toastParams.text);
            }

            item.editing = false;
         });
      }
      else if($scope.mode == "create")
      {
         //ajax request
         cities.create(form)
         .success(function (response) {
            //clear toast
            toaster.clear()

            if(response.status == "success") {
               $scope.cities.push(response.model);

               toastParams.type = 'success';
               toastParams.title = "Success";
               toastParams.text = "City saved!";
               toaster.timeout = 3000;

               toaster.pop(toastParams.type, toastParams.title, toastParams.text);
            }

            $scope.item.editing = false;
            $scope.selectCity(response.model);
         });
      }
    };


    $scope.createItem = function() {
      $scope.item = { name: '', state_id: ''};
      $scope.item.editing = true;
      $scope.mode = "create";

      //reset selects
      $scope.state.selected = null;
   	}

   	$scope.deleteItem = function(item) {
       //Show wait toast
      var toastParams = { type: 'wait', title: 'Status', text: "Deleting...", timeout: 0 };
      toaster.pop(toastParams.type, toastParams.title, toastParams.text);

      if(item)
      {
         //ajax request
         cities.delete(item.id)
         .success(function (response) {
            //clear toast
            toaster.clear()
            //next item
            var nextItem = 0;

            if(response.status == "success") {
               var cities = $scope.cities.filter(function (el) {
                  var index = $scope.cities.indexOf(item);
                  if(index >= 0 && index < $scope.cities.length - 1) {
                     nextItem = $scope.cities[index+1];
                  }
                  return el.id !== item.id;
               });

               $scope.cities = cities;

               toastParams.type = 'success';
               toastParams.title = "Success";
               toastParams.text = "City deleteed successfully!";
               toaster.timeout = 3000;

               toaster.pop(toastParams.type, toastParams.title, toastParams.text);

               $scope.selectCity(nextItem);
               $scope.item.editing = false;
            }
         });
      }
   };

	$scope.populateStates = function() {
      var states = Site.data.states;
      var $states = angular.fromJson(states);
     
     angular.forEach($states, function(state) {
         $scope.states.push(state)
     });
  	};

  	$scope.fetchCities = function() {
      $scope.statusText = "Loading..."

      cities.all()
      .success(function (response) {
         if(response.length > 0) {
            $scope.statusShow = false;

            angular.forEach(response, function(city) {
               $scope.cities.push(city);
            });

            $scope.item = $filter('orderBy')($scope.cities, 'name')[0];
            $scope.item.selected = true;
            $scope.state.selected = $scope.item.state;
         }
         else {

            $scope.statusShow = true;
            $scope.statusText = "No cities"
         }
      });
    };

	$scope.$on('populate:states', $scope.populateStates);
	$scope.$on('fetch:cities', $scope.fetchCities);

	$scope.$broadcast('populate:states');
	$scope.$broadcast('fetch:cities');
}]);