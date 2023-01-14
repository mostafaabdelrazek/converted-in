var app = angular.module('myApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('[{');
    $interpolateProvider.endSymbol('}]');
});

var HTTP_STATUS = {
    OK: 200,
    NOT_FOUND: 400
}


app.controller('MasterController', function($scope) {
    $scope.arrConfig = {
        pageNo: 1,
        pageSize: 10
    }
});