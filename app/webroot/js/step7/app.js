angular.module('phonecat',[]).
	config(['$routeProvider', function($routeProvider){
		$routeProvider.
			when('/phones',{
				templateUrl: baseURL + '/js/step7/template/phone-list.html',
				controller: PhoneListCtrl
			}).
			when('/phones/:phoneId', {
				templateUrl: baseURL +  '/js/step7/template/phone-detail.html',
				controller: PhoneDetailCtrl
			}).
			otherwise({redirectTo: '/phones'});
	}]);

