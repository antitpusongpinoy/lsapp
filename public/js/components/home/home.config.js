'use strict';

angular
    .module('home')
    .config(config);

    function config($urlRouterProvider, $stateProvider){
        $stateProvider
            .state('home',{
                url:'/home',       
                templateUrl: 'js/components/home/template/home.template.html',
                controller: 'HomeController as vm',
            });
    }