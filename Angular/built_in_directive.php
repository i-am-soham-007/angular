<!DOCTYPE html>
<html>
<head>
	<title>Built In Directive ANGULAR</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>

<div ng-app="myapp" w3-test-directive>
</div>

</body>
</html>

<script>
var app = angular.module("myapp",[]);
app.directive("w3TestDirective", function(){
	return{
		template: "I was a made Directive constructor !!"
	};
});
</script>