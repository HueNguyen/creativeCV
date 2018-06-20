<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('lib/bootstrap-3.3.7-dist/css/bootstrap.css') }}" rel="stylesheet">
    @yield('css')

</head>
<body>
<div class="sidebar-left">
    <div class="box-profile">
        <p><span>Hi, I am</span> <br><span id="name-job">DEVELOPER</span></p>
    </div>
    <div class="contain-sidebar">
        <ul>
            <li>
                <a><p><span class="glyphicon glyphicon-align-left" aria-hidden="true"></span> Update info-profile</p></a>
                <ul class="left-submenu">
                    <li><a><p><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Base information</p></a></li>
                    <li><a><p><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Education</p></a></li>
                    <li><a><p><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Product manage</p></a></li>
                    <li><a><p><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Experience</p></a></li>
                    <li><a><p><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Skill</p></a></li>
                    <li><a><p><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Favorite</p></a></li>
                    <li><a><p><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span> Password</p></a></li>
                </ul>
            </li>
            <li><a><p><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> Menu 02</p></a></li>
            <li><a><p><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Menu 02</p></a></li>
            <li><a><p><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> Menu 02</p></a></li>
        </ul>
    </div>
</div>
<header></header>
<div class="container-fluid main-wrap">
    <div id="app">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10 main-content">
                <div style="padding: 15px">
                    {{--<div class="col-md-12 title-content">--}}
                        {{--<h4>Update profile</h4>--}}
                    {{--</div>--}}
                    <div class="col-md-8">
                        {{--base profile-info--}}
                        <profile></profile>
                        {{--education info--}}
                        <education></education>
                    </div>
                    <div class="col-md-4 pad-left-15">
                        <skill></skill>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="{{ URL::asset('js/app.js') }}"></script>
    <!-- custom script -->
    @yield('script')
</body>
</html>
