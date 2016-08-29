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



app.controller("APIProjectsCtrl", function ($scope, $http, $interval) {
    
    $scope.projects = [];
    $scope.init = function() {
        $http.get(public + 'admin/projects/api').
        success(function(data, status, headers, config) {
            $scope.projects = data;
            console.log($scope.projects);        
        }); 
    };
    // $interval( function(){ $scope.init(); }, 5000);

    $scope.init();

});

app.controller("APITasksCtrl", function ($scope, $http, $interval) {
    
    $scope.tasks = [];
    $scope.init = function() {
        $http.get(public + 'admin/task_types/api').
        success(function(data, status, headers, config) {
            $scope.tasks = data;
            console.log($scope.tasks);        
        }); 
    };
    // $interval( function(){ $scope.init(); }, 5000);

    $scope.init();

});


app.controller("APIUsersCtrl", function ($scope, $http, $interval) {
    
    $scope.users = [];
    $scope.init = function() {
        $http.get(public + 'admin/system_users/api').
        success(function(data, status, headers, config) {
            $scope.users = data;
            console.log($scope.users);        
        }); 
    };
    // $interval( function(){ $scope.init(); }, 5000);

    $scope.init();

});