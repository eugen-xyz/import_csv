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

    // $scope.save = function(){

    //     var url = public + 'admin/save/csv';
    //     console.log(url);

    //     $scope.csv = [];
    //     $http.get(public + 'admin/upload/csv').
    //     success(function(data, status, headers, config) {
    //         $scope.csv = data;
    //         console.log($scope.csv);        
    //     });

    //     var request = $http({
    //             method: "POST",
    //             url: url,
    //             data: $scope.csv,
    //             headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
    //         });


    //         request.success(function (data, response) {
    //             console.log(response);
    //         });
    // }

    $scope.init();

});