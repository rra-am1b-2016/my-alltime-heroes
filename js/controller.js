app.controller("testController", function ($scope, $http) {
      $scope.firstname = "";
      $scope.infix = "";
      $scope.lastname = "";
      $scope.zin = "Mijn naam is: ";
      $scope.fullName = function () {
         return $scope.zin + " " + $scope.firstname + " " + $scope.infix + " " + $scope.lastname;
      };

      $http.get("data.php").then(function (response) {
            $scope.jsonString =  response.data;
            //console.log($scope.jsonString);
      })

});