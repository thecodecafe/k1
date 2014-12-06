app.controller('SchoolCtrl', ['$scope', 'schools', '$filter', 'toaster', function($scope, schools, $filter, toaster) {

   $scope.schools = [];
   $scope.controlList = [];

   $scope.groups = [
      {name: "university"},
      {name: "polytechnic"}
   ];

   $scope.ownerships = [
      {name: "Federal"},
      {name: "State"},
      {name: "Private"}
   ];

   $scope.statusShow = true;
   $scope.statusText = "";
   $scope.filter = '';

   $scope.state;
   $scope.states = [];

   $scope.query;

   $scope.selectSchool = function(item){    

      angular.forEach($scope.schools, function(item) {
         item.selected = false;
         item.editing = false;
      });

      $scope.item = item;
      $scope.item.selected = true;
      $scope.states.selected = $scope.item.state;
      $scope.ownerships.selected = { name: $scope.item.ownership };
      $scope.groups.selected = { name: $scope.item.type };
   };

   $scope.selectGroup = function(item){    
      angular.forEach($scope.groups, function(item) {
         item.selected = false;
      });

      $scope.group = item;
      $scope.group.selected = true;
      $scope.filter = item.name;
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
      var form = { name: $scope.item.name, type: $scope.groups.selected.name, ownership: $scope.ownerships.selected.name, state_id: $scope.states.selected.id };
   
      if($scope.mode == "edit")
      {
         //ajax request
         schools.update(item.id, form)
         .success(function (response) {
            //clear toast
            toaster.clear()

            if(response.status == "success") {
               $scope.item = response.model;

               toastParams.type = 'success';
               toastParams.title = "Success";
               toastParams.text = "School updated successfully!";
               toaster.timeout = 3000;

               toaster.pop(toastParams.type, toastParams.title, toastParams.text);
            }

            item.editing = false;
         });
      }
      else if($scope.mode == "create")
      {
         //ajax request
         schools.create(form)
         .success(function (response) {
            //clear toast
            toaster.clear()

            if(response.status == "success") {
               $scope.schools.push(response.model);

               toastParams.type = 'success';
               toastParams.title = "Success";
               toastParams.text = "School updated successfully!";
               toaster.timeout = 3000;

               toaster.pop(toastParams.type, toastParams.title, toastParams.text);
            }

            $scope.item.editing = false;
            $scope.selectSchool(response.model);
            console.log($scope.item);
         });
      }
   };

   $scope.createItem = function() {
      $scope.item = { name: '', type: '', ownership: '', state_id: ''};
      $scope.item.editing = true;
      $scope.mode = "create";

      //reset selects
      $scope.states.selected = null;
      $scope.groups.selected = null;
      $scope.ownerships.selected = null;
   }

   $scope.deleteItem = function(item) {
       //Show wait toast
      var toastParams = { type: 'wait', title: 'Status', text: "Deleting...", timeout: 0 };
      toaster.pop(toastParams.type, toastParams.title, toastParams.text);

      if(item)
      {
         //ajax request
         schools.delete(item.id)
         .success(function (response) {
            //clear toast
            toaster.clear()
            //next item
            var nextItem = 0;

            if(response.status == "success") {
               var schools = $scope.schools.filter(function (el) {
                  var index = $scope.schools.indexOf(item);
                  if(index >= 0 && index < $scope.schools.length - 1) {
                     nextItem = $scope.schools[index+1];
                  }
                  return el.id !== item.id;
               });

               $scope.schools = schools;

               toastParams.type = 'success';
               toastParams.title = "Success";
               toastParams.text = "School deleteed successfully!";
               toaster.timeout = 3000;

               toaster.pop(toastParams.type, toastParams.title, toastParams.text);

               $scope.selectSchool(nextItem);
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

   $scope.fetchSchools = function() {
      $scope.statusText = "Loading..."
      schools.all()
      .success(function (response) {
         if(response.length > 0) {
            $scope.statusShow = false;

            angular.forEach(response, function(school) {
               $scope.schools.push(school);
               $scope.controlList.push(school);
            });

            $scope.item = $filter('orderBy')($scope.schools, 'name')[0];
            $scope.item.selected = true;
            $scope.states.selected = $scope.item.state;
         }
         else {
            $scope.statusShow = true;
            $scope.statusText = "No Schools"
         }
      });
   };

   $scope.$on('populate:states', $scope.populateStates);
   $scope.$on('fetch:schools', $scope.fetchSchools);

   $scope.$broadcast('fetch:schools');
   $scope.$broadcast('populate:states');
}]);