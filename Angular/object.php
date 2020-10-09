<!DOCTYPE html>
<html>
<head>
	<title>ANGULAR OBJECT</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>

<div ng-app="" ng-init="person={fname:'sonu',lname:'rathod'}">
<p>{{person.fname}} using Expression to show </p><br><br>
Show Using ng-bind Directive of angular <span ng-bind="person.lname"></span>
</div>
</body>
</html>