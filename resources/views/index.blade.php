<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       
    </head>
    
    <body ng-app="dashboard">
         <div ui-view=""></div>
        <!-- Dashboard Application Dependencies -->
        <script src="{{asset('bower_components/angular/angular.js')}}"></script>
        <script src="{{asset('bower_components/angular-ui-router/release/angular-ui-router.js')}}"></script>
        <script src="{{asset('bower_components/angular-route/angular-route.js')}}"></script>
        <link rel="stylesheet"  href="{{asset('node_modules/bootstrap/dist/css/bootstrap.min.css')}}"  type="text/css">
        <script src="{{asset('node_modules/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('node_modules/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('bower_components/angular-route/angular-route.js')}}"></script>

        <!-- Dashboard Application Scripts -->
        <script src="{{asset('js/components/app/app.module.js')}}"></script>
{{--         <script src="{{asset('js/components/app/app.config.js')}}"></script> --}}

        <!-- Dashboard Home Scripts -->
        <script src="{{asset('js/components/home/home.module.js')}}"></script>
        <script src="{{asset('js/components/home/home.config.js')}}"></script>
        <script src="{{asset('js/components/home/home.controller.js')}}"></script> 

        <!-- Dashboard about Scripts -->
        <script src="{{asset('js/components/about/about.module.js')}}"></script>
        <script src="{{asset('js/components/about/about.config.js')}}"></script>
        <script src="{{asset('js/components/about/about.controller.js')}}"></script>


    </body>
</html>
