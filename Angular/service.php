<!DOCTYPE html>
<html>
<head>
	<title>Services of Angular </title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>

<ul>** SERVICES
	<li> $location</li>
	<li> $http</li>
	<li> $timeout</li>
	<li> $interval</li>
	<li> CREATE OWN CUSTOM SERVICE</li>
</ul>	

<div ng-app="myapp" ng-controller="ctrl">
	<p>HELLO WELCOME </p>
	<h3> {{ msg | uppercase}}</h3>
</div>

</body>
</html>
<script>
	var app = angular.module('myapp', []);
	app.controller('ctrl' , function($scope,$http){
		$http.get('msg.html').then( function(response) {
			$scope.msg = response.data;
		});
	});
</script>