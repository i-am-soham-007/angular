<!DOCTYPE html>
<html>
<head>
	<title>Timeout Service</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>

<div ng-app="myapp" ng-controller="ctrl">
	<h2>{{Header}}</h2>
</div>

</body>
</html>
<script>
	var app = angular.module('myapp', []);
	app.controller('ctrl', function($scope,$timeout){
		$scope.Header = "HELLO WORLD  <?php echo date(' h:i:s A'); ?>";
		$timeout(function () {
			$scope.Header = "Time Is  <?php echo date('h:i:s A'); ?>";
		},2000);
	});
</script>