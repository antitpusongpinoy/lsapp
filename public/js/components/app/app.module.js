'use strict';

angular.module('dashboard',[
        'ngRoute',
        'dashboard.main', //dashboard main module, for content
        'ui.router', 
        'home', // home module
        'dashboard.statistics', // statatistics module
        'map', // map module
        'selector'
    ]);