function PhoneListCtrl($scope,$http) {
	$http.get('../json/api_get/phones.json').success(function(data,status) {
		console.log('success');
		console.log(data);
		console.log(status);
		$scope.phones = data.phones;
		//$scope.phones = data.phones.splice(0,5);	//実験用
	}).error(function(data, status) {
			console.log('error');
			console.log(data);
			console.log(status);
	});
}
