(function(){
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
        vm.userRole = 'Admin';
        vm.years = [];
        vm.locationsToGenerate = [];

        vm.allLocations = [];
        vm.selectedRegions = [];
        vm.selectedProvinces = [];
        vm.selectedMuncities = [];
        vm.selectedFacilities = [];

        vm.recentlySelected = {};
        vm.isCmpLvlFrozen = false;
        vm.locationsToGenerate = [];

        vm.periods = ['Year','Quarter','Month'];
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
        vm.ranges = {
            Quarter:[{name:'1st',num:1},{name:'2nd',num:2},{name:'3rd',num:3},{name:'4th',num:4}],
            Month:vm.months
        }

        vm.locations = {
            'Region':[],
            'Province':[],
            'Municipality':[],
            'Facility':[]
        };
        vm.filtered = {
            'Region':[],
            'Province':[],
            'Municipality':[],
            'Facility':[]
        };


        vm.programs = [
            {id:"childcare", name:"Child Care"},
            {id:"mc", name:"Maternal Care"},
            {id:"fp", name:"Family Planning"},
            {id:"morbidity", name:"Morbidity Diseases"},
            {id:"btml", name:"Blood Type Master List"}
        ];

        vm.statsCriterions = {
            "cmpLvl":{
                'codes':[],
                'level':''
            },
            "year":{
                'from':0,
                'to':0,
            }
        };
        for(var i = 2009; i<=2022; i++)
            vm.years.push({name:i, num:i});
            vm.ranges.Year = vm.years;
            vm.statsCriterions.year.from = vm.years[0].num;
            vm.statsCriterions.year.to = vm.years[0].num;
        
        /* $http.get('api/get/submitted/years')
         .then(function(response){
             console.log(response.data);
             vm.years = response.data;
             vm.statsCriterions.year = vm.years[0];
         }).catch(function(response){
             console.log(response.data);
         }); */
         vm.hasAccessTo = function(level){
            if(vm.accessLevels[vm.userRole].indexOf(level) != -1)
                return true;
            return false;
        }


            $http.get('api/get/wah/regions')
            .then(function(response){
                vm.locations.Region= response.data;
                vm.locations.Region.unshift({location_code:0,location_name:'ALL Regions'});
                vm.filtered.Region = vm.locations.Region;
            })
            .catch(function(response){
                alert('Could not retrieve active regions.');
            });
        

        // Retrieves all provinces with active facilities to populate province <select> input
        $http.get('api/get/wah/provinces')
        .then(function(response){
            vm.locations.Province= response.data;
            vm.locations.Province.unshift({region_code:0,location_code:0,location_name:'ALL Provinces'});
            vm.filtered.Province = vm.locations.Province;
        })
        .catch(function(response){
            console.log('Could not retrieve active provinces.');
        });

        // Retrieves all municipality  to populate municipality <select> input
        $http.get('api/get/wah/municipalities')
        .then(function(response){
            vm.locations.Municipality = response.data;
            vm.locations.Municipality.unshift({region_code:0,province_code:0,location_code:0,location_name:'ALL Cities/Municipalities'});
            vm.filtered.Municipality = vm.locations.Municipality;
        })
        .catch(function(response){
            alert('Could not retrieve active provinces.');
        });

        // Retrieves all facility  to populate municipality <select> input
        $http.get('api/get/wah/facilities')
            .then(function(response){
                vm.locations.Facility= response.data;
                vm.locations.Facility.unshift({region_code:0,province_code:0,muncity_code:0,location_code:0,location_name:'ALL Facilities'});
                vm.filtered.Facility = vm.locations.Facility;
                // vm.allLocations = vm.allLocations.concat(response.data);
                console.log('vm.locations.Facility');
                console.log(vm.locations.Facility);
                // vm.initUserLocations();
            })
            .catch(function(response){
                console.log('Could not retrieve active facilities.');
            });

        $scope.$watch('vm.is_national',function(newValue){
            vm.clearSelection();
            if(!newValue) return;
            vm.statsCriterions.cmpLvl.level = 'National';
            vm.recentlySelected = {location_code:0,location_name:'National'};
            vm.locationsToGenerate.push(vm.recentlySelected);
        });

        $scope.$watch('vm.selectedRegions',function(newValue){
            if(!vm.selectedRegions) return;
            if(!vm.isCmpLvlFrozen)
                vm.statsCriterions.cmpLvl.level = 'Region';
            vm.filtered.Province = [];
            vm.selectedProvinces = null;
            vm.selectedMuncities = null;
            vm.selectedFacilities = null;
            if(!vm.selectedRegions)
                vm.filtered.Province = vm.locations.Province;
            else{
                if(newValue.location_code > 0){
                    vm.filtered.Province = vm.locations.Province
                                                .filter(obj => obj.region_code == newValue.location_code);
                    vm.filtered.Province.unshift({region_code:0,location_code:0,location_name:'ALL Provinces'});
                }
            }
            
            vm.recentlySelected = newValue;

            console.log('Region Watch');
        });

        $scope.$watch('vm.selectedMuncities',function(newValue){
            if(!vm.selectedMuncities) return;
            if(!vm.isCmpLvlFrozen)
                vm.statsCriterions.cmpLvl.level = 'Municipality';
            vm.filtered.Facility = [];
            vm.selectedFacilities = null;
            if(!vm.selectedMuncities)
                vm.filtered.Facility = vm.locations.Facility;
            else{
                if(newValue.location_code > 0){
                    vm.filtered.Facility = vm.locations.Facility
                                                .filter(obj => obj.muncity_code == newValue.location_code);
                    vm.filtered.Facility.unshift({region_code:0,province_code:0,muncity_code:0,location_code:0,location_name:'ALL Facilities'});
                }
            }
            vm.recentlySelected = newValue;
            console.log('Munctiy Watch');
        });

        $scope.$watch('vm.selectedFacilities',function(newValue){
            if(!vm.selectedFacilities) return;
            if(!vm.isCmpLvlFrozen)
                vm.statsCriterions.cmpLvl.level = 'Facility';
            vm.recentlySelected = newValue;
            console.log('Facility Watch');
        });

        $scope.$watch('vm.recentlySelected',function(newValue, oldValue){
            console.log('recently selected Watch');
            console.log(oldValue);
            console.log(newValue);
            if(!newValue)
                vm.recentlySelected = vm.prevRecentlySelected;
            vm.prevRecentlySelected = oldValue;
        });

        vm.clearSelection = function(){
            vm.recentlySelected = {};
            vm.selectedRegions = null;
            vm.selectedProvinces = null;
            vm.selectedMuncities = null;
            vm.selectedFacilities = null;
            vm.statsCriterions.cmpLvl.level= '';
            vm.locationsToGenerate = [];

            // Also, revert filtered locations back to all items
            vm.filtered.Province = vm.locations.Province;
            vm.filtered.Municipality = vm.locations.Municipality;
            vm.filtered.Facility = vm.locations.Facility;
        }
        
        $scope.selected = [];
        
        $scope.query = {
            order: 'name',
            limit: 5,
            page: 1
        };
        
        function success(desserts) {
            $scope.desserts = desserts;
        }
        
        $scope.getDesserts = function () {
            $scope.promise = $nutrition.desserts.get($scope.query, success).$promise;
        };
        
    }
})();