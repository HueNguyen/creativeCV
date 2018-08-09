<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CreativeCV-@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('lib/bootstrap-3.3.7-dist/css/bootstrap.css') }}" rel="stylesheet">
        {{--custom css--}}
        @yield('css')
    </head>
    <body>
        <div class="sidebar-left">
            <div class="box-profile">
                <p><span>Hi, I am</span> <br><span id="name-job">DEVELOPER</span></p>
            </div>
            @include('parts.sidebar')
        </div>
        @include('parts.menu_admin')
        <div class="container-fluid main-wrap">
            <div id="app">
                @yield('content')
            </div>
        </div>
        <script src='http://cdn.ckeditor.com/4.6.2/standard/ckeditor.js'></script>
        <script src="{{ URL::asset('js/app.js') }}"></script>
        <!-- custom script -->
        @yield('script')
    </body>
</html>
