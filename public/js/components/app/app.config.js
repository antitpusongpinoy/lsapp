(function(){
  'use strict';

  angular
      .module('dashboard')
      .config(config)
      .config(function($locationProvider) { // remove ! on links
        $locationProvider.hashPrefix('');
      });

  function config(
                  $urlRouterProvider, // for ngRoute module
                  $stateProvider,     // for ui.router module
                  
                  ){
      // Route to /home as initial landing page
      $urlRouterProvider.otherwise('/dashboard/home');

      // Indicate state, which template to use, and which controller will handle logic
      /* $stateProvider
      .state('/', {
          url:'/home',
          templateUrl:'js/components/home/template/home.template.html',
          controller:'HomeController as vm',
      }); 
      
      $stateProvider
            .state('auth', {
                url:'/auth',
                templateUrl:'js/components/auth/template/auth.template.html',
                controller:'AuthController as vm',
            });
      */

  }
})();   