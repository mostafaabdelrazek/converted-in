app.service("SrvUser", function($http){
    var service = {
        ListAll: function(page) {
            let strURL = "/api/user/all";
            return $http.get(strURL);
        }
    }
    return service;
});