controller =  function($scope, SrvTask){
    $scope.arrData = {
        data : []
    }

    $scope.List = function (intPageNo = $scope.$parent.arrConfig['pageNo']) {
        SrvTask.List(intPageNo).then(function(response) {
            if (response.status == HTTP_STATUS.OK) {
                $scope.arrData = response.data;
            }
        })
    }

    function init() {
        $scope.List();
    }

    init();
};

controller = app.controller('TaskList', controller);