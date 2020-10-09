<!DOCTYPE html>
<html>
<head>
	<title>SORTING FILTER USING AGULAR</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>

<div ng-app="myapp" ng-controller="myctrl">
	
	<table border="1" width="100%">
			<tr>
				<th ng-click="orderByMe('name')">NAME</th>
				<th ng-click="orderByMe('country')">Country</th>
			</tr>
			<tr ng-repeat="x in names | orderBy:myOrderBy">
				<td>{{x.name}}</td>
				<td>{{x.country}}</td>
			</tr>	
	</table>
</div>

</body>
</html>
<script>
	var app = angular.module('myapp', []);

	app.controller("myctrl", function($scope)
	{
		$scope.names = [
						{ name : 'SOHAM' , country : 'INDIA' },
						{ name : 'JINKAL' , country : 'AUSTRALIYA' },
						{ name : 'ABCDEF' , country : 'PAKISTAN' },
						{ name : 'JKLMN' , country : 'CHINA' }
						];

		// function for sorting
		$scope.orderByMe = function(x){
			$scope.myOrderBy = x ;
		}
	});
</script>
