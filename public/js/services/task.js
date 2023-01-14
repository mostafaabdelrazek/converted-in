app.service("SrvTask", function($http){
    var service = {
        List: function(page) {
            let strURL = "/api/task";
            strURL += "?page="+page;
            return $http.get(strURL);
        },
        Create: function(params) {
            let strURL = "/api/task";
            return $http.post(strURL, {
                strTitle: params.strTitle,
                strDescription: params.strDescription,
                intAdminID: params.intAdminID,
                intUserID: params.intUserID
            });
        },
        LoadStats: function() {
            let strURL= "/api/task/stats";
            return $http.get(strURL);
        }
    }
    return service;
});