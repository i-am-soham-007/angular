<!DOCTYPE html>
<html>
<head>
	<title></title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body ng-app="myapp">
<h2>{{color}}</h2>

<div ng-controller="myctrl">
	<h2>{{color}}</h2>
</div>
<h2>{{color}}</h2>
</body>
</html>
<script> 
var app = angular.module("myapp",[]);

app.run( function($rootScope)
{
	$rootScope.color ="BLUE";
});

app.controller("myctrl", function($scope)
{
$scope.color="RED";
});
</script>