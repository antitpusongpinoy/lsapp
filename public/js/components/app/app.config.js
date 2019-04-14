'use strict';

angular.
  module('dashboard').
  config(['$routeProvider',
    function config($routeProvider) {
      $routeProvider.
        when('/', {
          template: '<home></home>'
        }).
        /* when('/about', {
          template: '<about></about>'
        }).
        when('/contact', {
          template: '<contact></contact>'
        }).
        when('/service', {
          template: '<service></service>'
        }). */
        otherwise('/');
    }
  ]);