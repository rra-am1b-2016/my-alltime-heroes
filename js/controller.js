app.controller("testController", function ($scope, $http) {
      $scope.firstname = "";
      $scope.infix = "";
      $scope.lastname = "";
      $scope.zin = "Mijn naam is: ";
      $scope.fullName = function () {
         return $scope.zin + " " + $scope.firstname + " " + $scope.infix + " " + $scope.lastname;
      };

      $scope.removeRecord = function (id) {
            $http({
                  url: 'removeRecord.php',
                  method: 'POST',
                  data: {id: id} ,
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).then(function (response){

            }, 
            function (response) {

            });
            $scope.readRecords();
      }


      $scope.readRecords = function () {
             $http.get("data.php").then(function (response) {
                  $scope.jsonString =  response.data;
             });
      }

      $scope.createRecord = function () {
            $http({
                  url: 'createRecord.php',
                  method: 'POST',
                  data: {firstname: $scope.firstname,
                         infix: $scope.infix,
                         lastname: $scope.lastname,
                         haircolor: $scope.haircolor} ,
                  headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).then(function (response) {
                  
            },
            function (response) {

            }); 
            $scope.readRecords();                   
      }

});