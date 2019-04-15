(function(){
    'use strict';

    angular
        .module('dashboard.main')
        .config(config);

    function config($urlRouterProvider, $stateProvider){
        $stateProvider
            .state('dashboard',{
                url:'/dashboard',
                views: {
                    '':{
                        templateUrl:'js/components/dashboard-main/template/dashboard-main.template.html'
                    },
                    'navbar@dashboard':{
                        templateUrl:'js/components/dashboard-main/template/dashboard-nav.template.html',
                    }
                }
            });
            

    }
})();