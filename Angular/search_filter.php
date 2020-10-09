<!DOCTYPE html>
<html>
<head>
	<title>SEARCH FILTER USING AGULAR</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>

<div ng-app="myapp" ng-controller="myctrl">
	<input type="" name="" ng-model="test">
	<li ng-repeat="x in names | filter:test">{{ x }}</li>
</div>

</body>
</html>
<script>
	var app = angular.module('myapp', []);
	app.controller("myctrl", function($scope){
		$scope.names = [
						'jaini',
						'soham',
						'jini',
						'palak',
						'krupa',
						'pooja'
						];
	});
</script>