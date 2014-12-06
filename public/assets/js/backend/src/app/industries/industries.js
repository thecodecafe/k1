app.controller('IndustriesCtrl', ['$scope','$filter', 'industries', 'toaster',
	function($scope, $filter, industries, toaster) {

	$scope.industries = [];
	$scope.query;

	$scope.statusShow = true;
    $scope.statusText = "";

    $scope.selectItem = function(item){    

      angular.forEach($scope.industries, function(item) {
         item.selected = false;
         item.editing = false;
      });

      $scope.item = item;
      $scope.item.selected = true;
    };

    $scope.editItem = function(item){
      $scope.mode = "edit";
      if(item && item.selected){
         item.editing = true;
      }
    };

    $scope.createItem = function() {
      $scope.item = { name: ''};
      $scope.item.editing = true;
      $scope.mode = "create";
  	}

    $scope.deleteItem = function(item) {
      //Show wait toast
      var toastParams = { type: 'wait', title: 'Status', text: "Deleting...", timeout: 0 };
      toaster.pop(toastParams.type, toastParams.title, toastParams.text);

      if(item)
      {
         //ajax request
         industries.delete(item.id)
         .success(function (response) {
            //clear toast
            toaster.clear()
            //next item
            var nextItem = 0;

            if(response.status == "success") {
               var lgas = $scope.industries.filter(function (el) {
                  var index = $scope.industries.indexOf(item);
                  if(index >= 0 && index < $scope.industries.length - 1) {
                     nextItem = $scope.industries[index+1];
                  }
                  return el.id !== item.id;
               });

               $scope.lgas = lgas;

               toastParams.type = 'success';
               toastParams.title = "Success";
               toastParams.text = "Industry deleteed successfully!";
               toaster.timeout = 3000;

               toaster.pop(toastParams.type, toastParams.title, toastParams.text);

               $scope.selectItem(nextItem);
               $scope.item.editing = false;
            }
         });
      }
   };

  	$scope.doneEditing = function(item){
      //Show wait toast
      var toastParams = { type: 'wait', title: 'Status', text: "Saving...", timeout: 0 };
      toaster.pop(toastParams.type, toastParams.title, toastParams.text);

      //form data
      var form = { name: $scope.item.name };
   
      if($scope.mode == "edit")
      {
         //ajax request
         industries.update(item.id, form)
         .success(function (response) {
            //clear toast
            toaster.clear()

            if(response.status == "success") {
               $scope.item = response.model;

               toastParams.type = 'success';
               toastParams.title = "Success";
               toastParams.text = "Industry updated successfully!";
               toaster.timeout = 3000;

               toaster.pop(toastParams.type, toastParams.title, toastParams.text);
            }

            item.editing = false;
         });
      }
      else if($scope.mode == "create")
      {
         //ajax request
         industries.create(form)
         .success(function (response) {
            //clear toast
            toaster.clear()

            if(response.status == "success") {
               $scope.industries.push(response.model);

               toastParams.type = 'success';
               toastParams.title = "Success";
               toastParams.text = "Industry saved!";
               toaster.timeout = 3000;

               toaster.pop(toastParams.type, toastParams.title, toastParams.text);
            }

            $scope.item.editing = false;
            $scope.selectItem(response.model);
         });
      }
    };

  	$scope.fetch = function() {
      $scope.statusText = "Loading..."

      industries.all()
      .success(function (response) {
         if(response.length > 0) {
            $scope.statusShow = false;

            angular.forEach(response, function(industry) {
               $scope.industries.push(industry);
            });

            $scope.item = $filter('orderBy')($scope.industries, 'name')[0];
            $scope.item.selected = true;
         }
         else {

            $scope.statusShow = true;
            $scope.statusText = "No industries to display";
         }
      });
    };

	$scope.$on('fetch:industries', $scope.fetch);
	$scope.$broadcast('fetch:industries');
}]);
