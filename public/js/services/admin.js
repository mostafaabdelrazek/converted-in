app.service("SrvAdmin", function($http){
    var service = {
        ListAll: function() {
            let strURL = "/api/admin/all";
            return $http.get(strURL);
        }
    }
    return service;
});