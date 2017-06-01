<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
   </head>
   <body>
      <div ng-app="">
         <p>Voer je naam in: <input type="text" ng-model="testName"/></p>
         <p ng-bind="testname"></p>
         <p>{{testName}}</p>
      </div>
   </body>
</html>