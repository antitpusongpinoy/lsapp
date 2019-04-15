(function(){
    'use strict';

    angular
        .module('home')
        .controller('HomeController', HomeController);

    function HomeController($http, $scope, $state){
        var vm = this;

        $http.get('/getsampledata').then(function(response) {
            vm.data =response.data;
          });

        vm.submit = function(){
            console.log(vm.user);
        }
    }
})();