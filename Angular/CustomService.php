<!DOCTYPE html>
<html>
<head>
	<title>Custom Service</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<body>
<div ng-app ="myapp" ng-init ="cname='red'" ng-controller="ctrl">

<input type="text" ng-model="cname">
<h2>{{color}}</h2>
</div>

</body>
</html>
<script>
	var app = angular.module('myapp', []);
	
	//SERVICE CODE
	app.service('colorname',function(){
		this.name = function(x){

			switch(x)
			{
				case 'red':
				return "red is define";
				break;

				case 'blue':
				return "Blue is define";

				case 'green':
				return "green is define";
				break;

				default :
				return x + " No This is not Define";
				break;
			}
		}
	});
	app.controller('ctrl',function($scope,colorname){
		$scope.cname ="red";
		$scope.color = colorname.name($scope.cname);
	});
</script>
