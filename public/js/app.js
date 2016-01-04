(function(){

var app = angular.module("GameRoom", []);

app.controller("MainController", ["$scope", "$http", function($scope, $http){
	
	$scope.someVar = "Please Show This";
	$scope.game = null;
	
	$scope.getGameResults = function()
	{
		var game = $http.get('/game');
		
		game.then(function(e){
			$scope.game = e.data;
		});
	}
}]);
	
})();