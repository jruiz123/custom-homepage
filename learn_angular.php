<!DOCTYPE html>
<html>
<head>
	<title>Angular JS</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</head>
<body>
	Hello World
	<div ng-app="">
		<p>Text Input: <input type="text" ng-model="input_text"></p>
		<!-- <p ng-bind="input_text"></p> -->
		<p>{{input_text}}</p>
	</div>
</body>
</html>

