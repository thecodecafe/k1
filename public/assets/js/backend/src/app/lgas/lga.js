app.controller('LgaCtrl', ['$scope', 'lgas', '$filter', 'toaster', function($scope, lgas, $filter, toaster) {

	$scope.state = { selected: null };
	$scope.states = [];
	$scope.lgas = [];

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

    $scope.selectLga = function(item){    

      angular.forEach($scope.lgas, function(item) {
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
         lgas.update(item.id, form)
         .success(function (response) {
            //clear toast
            toaster.clear()

            if(response.status == "success") {
               $scope.item = response.model;

               toastParams.type = 'success';
               toastParams.title = "Success";
               toastParams.text = "LGA updated successfully!";
               toaster.timeout = 3000;

               toaster.pop(toastParams.type, toastParams.title, toastParams.text);
            }

            item.editing = false;
         });
      }
      else if($scope.mode == "create")
      {
         //ajax request
         lgas.create(form)
         .success(function (response) {
            //clear toast
            toaster.clear()

            if(response.status == "success") {
               $scope.lgas.push(response.model);

               toastParams.type = 'success';
               toastParams.title = "Success";
               toastParams.text = "LGA saved!";
               toaster.timeout = 3000;

               toaster.pop(toastParams.type, toastParams.title, toastParams.text);
            }

            $scope.item.editing = false;
            $scope.selectLga(response.model);
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
         lgas.delete(item.id)
         .success(function (response) {
            //clear toast
            toaster.clear()
            //next item
            var nextItem = 0;

            if(response.status == "success") {
               var lgas = $scope.lgas.filter(function (el) {
                  var index = $scope.lgas.indexOf(item);
                  if(index >= 0 && index < $scope.lgas.length - 1) {
                     nextItem = $scope.lgas[index+1];
                  }
                  return el.id !== item.id;
               });

               $scope.lgas = lgas;

               toastParams.type = 'success';
               toastParams.title = "Success";
               toastParams.text = "LGA deleteed successfully!";
               toaster.timeout = 3000;

               toaster.pop(toastParams.type, toastParams.title, toastParams.text);

               $scope.selectLga(nextItem);
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

  	$scope.fetchLgas = function() {
      $scope.statusText = "Loading..."

      lgas.all()
      .success(function (response) {
         if(response.length > 0) {
            $scope.statusShow = false;

            angular.forEach(response, function(lga) {
               $scope.lgas.push(lga);
            });

            $scope.item = $filter('orderBy')($scope.lgas, 'name')[0];
            $scope.item.selected = true;
            $scope.state.selected = $scope.item.state;
         }
         else {

            $scope.statusShow = true;
            $scope.statusText = "No LGAs"
         }
      });
    };

	$scope.$on('populate:states', $scope.populateStates);
	$scope.$on('fetch:lgas', $scope.fetchLgas);

	$scope.$broadcast('populate:states');
	$scope.$broadcast('fetch:lgas');
}]);