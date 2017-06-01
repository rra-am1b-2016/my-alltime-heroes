<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina|Dosis" rel="stylesheet">
      <link rel="stylesheet" href="./css/style.css">
   </head>
   <body>
      <div ng-app="testApplication" ng-controller="testController">
         <p>Voornaam: <input type="text" ng-model="firstname"/></p>
         <p>Tussenvoegsel: <input type="text" ng-model="infix"/></p>
         <p>Achternaam: <input type="text" ng-model="lastname"/></p>
         <p>{{fullName()}}</p>
      </div>
   </body>
</html>

<script src="./js/app.js"></script>
<script src="./js/controller.js"></script>