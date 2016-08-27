app.controller("APIManhoursCtrl", function ($scope, $http, $interval) {
    
    $scope.manhours = [];
    $scope.init = function() {
        $http.get(public + 'admin/manhours/api').
        success(function(data, status, headers, config) {
            $scope.manhours = data;
            console.log($scope.manhours);        
        }); 
    };
    // $interval( function(){ $scope.init(); }, 5000);

    $scope.init();

});