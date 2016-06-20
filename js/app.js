(function () {
    var app = angular.module('blog', []);


    app.controller('listadoController', function ($scope, $http) {
        $scope.blog = [];

        $http.get("php/datatojson.php").success(function (data) {
            $scope.blog = data;
        });
        
    });

})();