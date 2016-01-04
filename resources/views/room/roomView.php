<!DOCTYPE html>
<html>
	
	<head>
		
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>	
	</head>
	
	
	<body ng-app="GameRoom" ng-controller="MainController" >
		
	<header><button ng-click="getGameResults()">Refresh</button></header>
	
	<div ng-hide="game == null">{{game}}</div>
	
	<script src="/js/app.js" ></script>	
	</body>
	
	
</html>