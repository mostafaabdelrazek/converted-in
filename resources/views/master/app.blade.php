<!DOCTYPE html>
<html lang="en">
    @include('master.header')
    <body data-ng-app="myApp" data-ng-controller="MasterController">
        @include('master.navbar')
        <main id="app" class="container">
            @yield('content')
        </main>
        @include('master.footer')
    </body>
</html>