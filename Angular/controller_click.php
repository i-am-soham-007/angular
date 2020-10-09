<!DOCTYPE html>
<html>
<head>
	<title>Angular Controller Event </title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>

<div ng-app="myapp" ng-controller="myctrl">
<h1 ng-click="changeName()">{{fname}}</h1>

</div>

</body>
</html>
<script>
	var app = angular.module('myapp',[]);
	app.controller('myctrl', function($scope){
		$scope.fname ="SOHAM RATHOD";
		$scope.changeName = function(){
			$scope.fname = "RATHOD SOHAM";
		}
	});
</script>

