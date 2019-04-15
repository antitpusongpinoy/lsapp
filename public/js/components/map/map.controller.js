(function(){
    'use strict';

    angular
        .module('map')
        .controller('MapController', MapController);

    function MapController($http, $scope){
        var vm = this;
        vm.map = {};
        vm.dateEnabled=true;
        vm.options = {
            'WAH e-Reporting' : ['All','On Time','Late','No Report','None'],
            'Indicators' : ['All','Max Values','Non-Zero Min Values','Zero Values','None']
        };
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
            
            {indicator_codes:['FIC_M','FIC_F'],name:'Fully Immunized Child',group:'Child Care'},
            {indicator_codes:['CIC_M','CIC_F'],name:'Completely Immunized Child',group:'Child Care'},
            {indicator_codes:['INF_BREAST_M','INF_BREAST_F'],name:'Exclusively Breastfed',group:'Child Care'},
            {indicator_codes:['PC1'],name:'Pregnant women with 4 or more prenatal visits (4ANC)',group:'Maternal Care'},
            {indicator_codes:['A90'],name:'Dengue',group:'Morbidity Diseases'},
            {indicator_codes:['J06'],name:'Acute Upper Respiratory Infection',group:'Morbidity Diseases'},
            {indicator_codes:['A09'],name:'Diarrhea',group:'Morbidity Diseases'},
            // Notifiable Category 1
            {indicator_codes:null,name:'Accute Flaccid Paralysis', group:'Notifiable Category 1'},
            {indicator_codes:null,name:'Acute Flaccid Paralysis', group:'Notifiable Category 1'},
            {indicator_codes:null,name:'Acute Hemmorrhagic Fever Syndrome', group:'Notifiable Category 1'},
            {indicator_codes:null,name:'Anthrax', group:'Notifiable Category 1'},
            {indicator_codes:null,name:'Ebola', group:'Notifiable Category 1'},
            {indicator_codes:null,name:'Hand Foot and Mouth Disease', group:'Notifiable Category 1'},
            {indicator_codes:null,name:'Human Avian Influenza', group:'Notifiable Category 1'},
            {indicator_codes:null,name:'Measles', group:'Notifiable Category 1'},
            {indicator_codes:null,name:'Meningococcal Disease', group:'Notifiable Category 1'},
            {indicator_codes:null,name:'MersCoV', group:'Notifiable Category 1'},
            {indicator_codes:null,name:'Neonatal Tetanus', group:'Notifiable Category 1'},
            {indicator_codes:null,name:'Paralytic Shellfish Poisoning', group:'Notifiable Category 1'},
            {indicator_codes:null,name:'Rabies', group:'Notifiable Category 1'},
            {indicator_codes:null,name:'Severe Acute Respiratory Syndrome', group:'Notifiable Category 1'},
            {indicator_codes:null,name:'Zika', group:'Notifiable Category 1'},
            

            // Notifiable Category 2
            {indicator_codes:null,name:'Acute Bloody Diarrhea', group:'Notifiable Category 2'},
            {indicator_codes:null,name:'Acute Encephalitis Syndrome', group:'Notifiable Category 2'},
            {indicator_codes:null,name:'Acute Viral Hepatitis', group:'Notifiable Category 2'},
            {indicator_codes:null,name:'Bacterial Meningitis', group:'Notifiable Category 2'},
            {indicator_codes:null,name:'Chikungunya', group:'Notifiable Category 2'},
            {indicator_codes:null,name:'Cholera', group:'Notifiable Category 2'},
            {indicator_codes:null,name:'Dengue', group:'Notifiable Category 2'},
            {indicator_codes:null,name:'Diphtheria', group:'Notifiable Category 2'},
            {indicator_codes:null,name:'Influenza-like Illness', group:'Notifiable Category 2'},
            {indicator_codes:null,name:'Leptospirosis', group:'Notifiable Category 2'},
            {indicator_codes:null,name:'Malaria', group:'Notifiable Category 2'},
            {indicator_codes:null,name:'Non-neonatal Tetanus', group:'Notifiable Category 2'},
            {indicator_codes:null,name:'Pertussis', group:'Notifiable Category 2'},
            {indicator_codes:null,name:'Rotavirus', group:'Notifiable Category 2'},
            {indicator_codes:null,name:'Typhoid and Paratyphoid Fever', group:'Notifiable Category 2'},
            // {indicator_codes:['wah_completeness'],name:'Completeness of Report',group:'WAH e-Reporting'},
            // {indicator_codes:['wah_timeliness'],name:'Timeliness of Report',group:'WAH e-Reporting'},
            // {indicator_codes:['wah_level'],name:'Facility Levels',group:'WAH e-Reporting'},
            {indicator_codes:['wah_ereporting'],name:'WAH e-Reporting',group:'WAH e-Reporting'},
        ];
    }
})();