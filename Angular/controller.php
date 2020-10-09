<!DOCTYPE html>
<html>
<head>
	<title>ANGULAR CONTOLLER</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body>
<div ng-app="MyFirstController" ng-controller="FirstController">
	first name <input type="text" name="" ng-model="firstname"><br><br>
	last  name <input type="text" name="" ng-model="lastname"><br><br>

FULL NAME {{ firstname + " " + lastname }}
</div>

</body>
</html>
<script>
	var app = angular.module('MyFirstController', []);
	app.controller('FirstController', function($scope){
		$scope.firstname ="SOHAM";
		$scope.lastname ="RATHOD";
	})
</script>