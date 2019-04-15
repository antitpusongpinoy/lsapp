'use strict';

angular
    .module('home')
    .config(config);

    function config($urlRouterProvider, $stateProvider){
        $stateProvider
            .state('home',{
                url:'/home',    
                views: {
                    'content@dashboard':{
                        templateUrl: 'js/components/home/template/home.template.html',
                        controller: 'HomeController as vm',
                    }
                },
                parent: 'dashboard'
            });
    }