
    'use strict';

    angular
        .module('dashboard.statistics')
        .controller('StatisticsController', StatisticsController);

    function StatisticsController($http, $scope, $state){
        var vm = this;
        vm.accessLevels = {
            'Admin':['Region','Province','Municipality','Facility'],
            'National':['Region','Province','Municipality','Facility'],
            'Region':['Region','Province','Municipality','Facility'],
            'Province':['Province','Municipality','Facility'],
            'Municipality':['Municipality','Facility'],
            'Facility':['Facility'],
        }
        vm.years = [];
        vm.months = [
            {num:1,name:"January"},
            {num:2,name:"February"},
            {num:3,name:"March"},
            {num:4,name:"April"},
            {num:5,name:"May"},
            {num:6,name:"June"},
            {num:7,name:"July"},
            {num:8,name:"August"},
            {num:9,name:"September"},
            {num:10,name:"October"},
            {num:11,name:"November"},
            {num:12,name:"December"},
        ];
        vm.programs = [
            {id:"morbidity", name:"Morbidity Diseases"},
            {id:"childcare", name:"Child Care"},
            {id:"mc", name:"Maternal Care"},
            {id:"fp", name:"Family Planning"}
        ];
        vm.statsCriterions = {
            "cmpLvl":{
                'codes':[],
                'level':''
            }
        };
        $http.get('api/get/submitted/years')
         .then(function(response){
             alert(response.data);
             
         }).catch(function(response){
             console.log(response.data);
         });
    }