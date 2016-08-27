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

    $scope.export = function(){

        $scope.manhours_csv = [];
        $http.get(public + 'admin/export/csv').
        success(function(data, status, headers, config) {
            $scope.manhours_csv = data;
            console.log($scope.manhours_csv);
        }); 
    }

    $scope.init();

});