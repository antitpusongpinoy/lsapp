'use strict';

angular
    .module('dashboard.statistics')
    .config(config);

    function config($urlRouterProvider, $stateProvider){
        $stateProvider
            .state('statistics',{
                url:'/statistics',    
                views: {
                    'content@dashboard':{
                        templateUrl: 'js/components/statistics/template/statistics.template.html',
                        controller: 'StatisticsController as vm',
                    }
                },
                parent: 'dashboard'
            });
    }