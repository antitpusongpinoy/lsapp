<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WAH Dashboard</title>
        <link rel="icon" href="{{asset('images/wah_logo.png') }}"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
       
    </head>
    
    <body ng-app="dashboard">
         <div class="h-100" ui-view=""></div>
        <!-- Dashboard Application Dependencies -->
        <script src="{{asset('bower_components/angular/angular.js')}}"></script>
        <script src="{{asset('bower_components/angular-route/angular-route.js')}}"></script>
        <script src="{{asset('bower_components/angular-ui-router/release/angular-ui-router.js')}}"></script>
        
        <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">   
        <link rel="stylesheet" href="{{asset('bower_components/mdbootstrap/css/mdb.min.css')}}" rel="stylesheet" type="text/css">    
        <link rel="stylesheet" href="{{asset('node_modules/bootstrap/dist/css/bootstrap.min.css')}}"  type="text/css">
        <link rel="stylesheet" href="{{asset('bower_components/mdbootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">     
        
        <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('bower_components/angular-route/angular-route.js')}}"></script>

        <script src="{{asset('bower_components/mdbootstrap/js/popper.min.js')}}"></script>
        <script src="{{asset('bower_components/mdbootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('bower_components/mdbootstrap/js/mdb.min.js')}}"></script>

        {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.3.2/angular-ui-router.min.js"></script> --}}



        <!-- Dashboard Application Scripts -->
        <script src="{{asset('js/components/app/app.module.js')}}"></script>
        <script src="{{asset('js/components/app/app.config.js')}}"></script>

        <!-- Dashboard Home Scripts -->
        <script src="{{asset('js/components/home/home.module.js')}}"></script>
        <script src="{{asset('js/components/home/home.config.js')}}"></script>
        <script src="{{asset('js/components/home/home.controller.js')}}"></script> 

        <!-- Dashboard about Scripts -->
        <script src="{{asset('js/components/about/about.module.js')}}"></script>
        <script src="{{asset('js/components/about/about.config.js')}}"></script>
        <script src="{{asset('js/components/about/about.controller.js')}}"></script>

        <!-- Dashboard map Scripts -->
        <script src="{{asset('js/components/map/map.module.js')}}"></script>
        <script src="{{asset('js/components/map/map.config.js')}}"></script>
        <script src="{{asset('js/components/map/map.controller.js')}}"></script>

        <!-- Dashboard Main Scripts -->
        <script src="{{asset('js/components/dashboard-main/dashboard.module.js')}}"></script>
        <script src="{{asset('js/components/dashboard-main/dashboard.config.js')}}"></script>

        <!-- Custom Input Select Directive for List Filtering and Mulitple Selections  -->
        <link href="{{asset('bower_components/angular-selector/dist/angular-selector.css')}}" rel="stylesheet" type="text/css"/>
        <script src="{{asset('bower_components/angular-selector/dist/angular-selector.js')}}"></script>

    </body>
</html>
