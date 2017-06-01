app.controller("testController", function ($scope) {
      $scope.firstname = "";
      $scope.infix = "";
      $scope.lastname = "";
      $scope.zin = "Mijn naam is: ";
      $scope.fullName = function () {
         return $scope.zin + " " + $scope.firstname + " " + $scope.infix + " " + $scope.lastname;
      };

});