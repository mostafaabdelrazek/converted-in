<!DOCTYPE html>
<html lang="en">
    @include('master.header')
    <body>
        @include('master.navbar')
        <main id="app" class="container" data-ng-app="myApp" data-ng-controller="MasterController">
            @yield('content')
        </main>
        @include('master.footer')
    </body>
</html>