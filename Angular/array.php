<!DOCTYPE html>
<html>
<head>
	<title>Array in Angular</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
Array Value = 1,10,5,20,15,30
<div ng-app="" ng-init="array=[1,10,5,20,15,30]">
	<p>Array Display Using Expression {{ array[2] }} </p>
	<br>
	<br>
	<p ng-bind="array[2]"></p>
</body>
</html>