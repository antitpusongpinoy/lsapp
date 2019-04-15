(function(){
    'use strict';

    angular
        .module('map')
        .config(config);

    function config($urlRouterProvider, $stateProvider){
        $stateProvider
            .state('map',{
                url:'/map',
                views:{
                    'content@dashboard':{
                        
                    templateUrl: 'js/components/map/template/map.template.html',
                    controller: 'MapController as vm',
                    }
                },
                parent: 'dashboard'
            });
    }
})();