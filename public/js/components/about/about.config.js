'use strict';

angular
    .module('about')
    .config(config);

    function config($urlRouterProvider, $stateProvider){
        $stateProvider
            .state('about',{
                url:'/about',       
                templateUrl: 'js/components/about/template/about.template.html',
                controller: 'AboutController as vm',
            });
    }