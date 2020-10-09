<!DOCTYPE html>
<html>
<head>
	<title>Array in Angular</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
	<form ng-app="" name="myform">
		<label> Email :</label>
		<input type="email" name="UserEmail" ng-model="text">
		<span ng-show="myform.UserEmail.$error.email">Not a Valid Email Address </span>
	</form>
</body>
</html>