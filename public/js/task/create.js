controller =  function($scope, $window, SrvTask, SrvAdmin, SrvUser){
    $scope.objTask = {
        strTitle:'',
        strDescription:'',
        intUserID:'',
        intAdminID: ''
    };

    $scope.arrAdmin = [];
    $scope.arrUser = [];
    $scope.objError = null;

    $scope.Save = function () {
        $scope.objError = null;
        $scope.objTask.intUserID = parseInt($scope.objTask.intUserID);
        $scope.objTask.intAdminID = parseInt($scope.objTask.intAdminID);
        SrvTask.Create($scope.objTask).
        then(function(response) {
            $window.location.href = "/";
        }, function(e){
            $scope.objError = e.data.errors;
        })
    }

    function listAdmin() {
        SrvAdmin.ListAll().then(function(response) {
            if (response.status == HTTP_STATUS.OK) {
                $scope.arrAdmin = response.data;
            }
        });
    }

    function listUser() {
        SrvUser.ListAll().then(function(response) {
            if (response.status == HTTP_STATUS.OK) {
                $scope.arrUser = response.data;
            }
        });
    }

    function init() {
        listAdmin();
        listUser();
    }

    init();
};

controller = app.controller('TaskCreate', controller);