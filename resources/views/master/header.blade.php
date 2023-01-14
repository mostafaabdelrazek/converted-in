<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Converted-In')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="{{ asset('js/myApp.js')}}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('style')
    @yield('head-script')
</head>
