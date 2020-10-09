<!DOCTYPE html>
<html>
<head>
	<title>Repeat Element HTML</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
	<div ng-app="" ng-init="names=['soham','rathod','jini','krupa','palak']">
		<ul>
			<li ng-repeat="val in names">
				{{ val }}
			</li>
		</ul>
	</div>

</body>
</html>