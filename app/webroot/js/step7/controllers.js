function PhoneListCtrl($scope,$http) {
	$http.get('../../json/api_get2/phones.json').success(function(data,status) {
		console.log('success');
		console.log(data);
		console.log(status);
		$scope.phones = data;
	}).error(function(data, status) {
		console.log('error');
		console.log(data);
		console.log(status);
	});

	// $scope.orderProp = 'age';
}

function PhoneDetailCtrl($scope, $routeParams) {
  $scope.phoneId = $routeParams.phoneId;
}
