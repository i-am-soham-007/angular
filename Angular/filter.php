<!DOCTYPE html>
<html>
<head>
	<title>Angular JS Filter</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>

<ul><h4>* FITLERS NAME </h4>
<li>currency</li>
<li>date</li>
<li>filter</li>
<li>json</li>
<li>limitTo</li>
<li>lowercase</li>
<li>number</li>
</ul>
<div ng-app="myapp" ng-controller="myctrl">
	<p> NAME IS  {{ lname | lowercase }}</p>
	<p> Name is  {{ fname | uppercase }}</p>
</div>

</body>
</html>
<script>
	var app = angular.module('myapp', []);
	app.controller('myctrl', function($scope){
		$scope.lname ="Rathod";
		$scope.fname ="Soham";
	});
</script>