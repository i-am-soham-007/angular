<!DOCTYPE html>
<html>
<head>
	<title>HTTP SERVICE</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>

<h2>HTTP METHODS LIST</h2>

<li> .get()</li>
<li> .head()</li>
<li> .jsonp()</li>
<li> .patch()</li>
<li> .post()</li>
<li> .put()</li>

<h2> PROPERTIES</h2>
<li> .config </li>
<li> .data </li>
<li> .headers </li>
<li> .status </li>
<li> .statusText </li>


<span>STATUS CODE : {{ statuscode }}</span>

<span>STATUS TEXT : {{ statustext }}</span>
<div ng-app="myapp" ng-controller="ctrl">
	<table border="1" width="100%">
		<thead>
			<th>Name</th>
			<th>Email</th>
		</thead>
		<tbody>
			<tr ng-repeat="val in names">
				<td>{{ val.name }}</td>
				<td>{{ val.email }}</td>
			</tr>
		</tbody>
	</table>
</div>

</body>
</html>
<script>
	var app = angular.module('myapp', []);
	app.controller('ctrl', function($scope,$http){
		$http.get('json_response.php').then( function (response){
			$scope.names = response.data.records;
			$scope.statuscode = response.status;
    		$scope.statustext = response.statusText;
		});
	});
</script>