var app = angular.module('babyblog',['ngRoute']);


//config
app.config(function($routeProvider,$locationProvider){
	$routeProvider
	.when('/', {
		templateUrl:'views/comic.html',
		controller:'HomeController'
	})
	.when('/comic/:id', {
		templateUrl:'views/comic.html',
		controller:'SingleComicController'
	})
	.when('/random', {
		templateUrl:'views/comic.html',
		controller:'RandomController'
	})
	.otherwise({redirectTo: '/'});
	$locationProvider.html5Mode(true);
});

app.run(function($rootScope) {
	$rootScope.blogTitle = 'BbVomi';
});

//comic retrieving factory
app.factory("getComics", ['$http',function($http) {
	return {
		comicId: 0,
		setComicId: function(newprop){
			this.comicId = newprop;
		},
		getData: function(callback){
		
			$http.get('serve.php')
			.success(callback);
			
		},
		getSingleComic: function(comic_id){
			var comicId = this.comicId;
			$http.get('serve.php?comic='+comic_id)
			.success(callback);
			
		}
	}
}]);

//controllers
app.controller('HomeController',['$scope','getComics',function($scope,getComics){
	getComics.getData(function(data){
		console.log(data);
		$scope.comics = data;
	});
}]);

app.controller('SingleComicController',['$scope','getComics',function($scope,getComics){
	getComics.setComicId(3);
	getComics.getSingleComic(function(data){
		console.log(data);
		$scope.comics = data;
	});
}]);
