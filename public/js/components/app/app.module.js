'use strict';

angular.module('dashboard',[
        'ngRoute',
        'dashboard.main', //dashboard main module, for content
        'ui.router', 
        'home', // home module
        'dashboard.statistics', // statatistics module
        'map', // map module
        'selector',
        'md.data.table' // for material design data table  bower install angular-material-data-table --save
    ]);