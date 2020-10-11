<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name') }} - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="all">
    </head>
    <body>
        <div id="app">
            <div class="row no-gutters">
                <div class="col-12 col-md-2">
                    <nav class="sidenav">
                        <ul class="nav vh-100" aria-label="Main Navigation" role="Navigation">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Dashboard</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-12 col-md-10">
                    <nav class="navbar navbar-light bg-white navbar-expand-lg shadow-sm">
                        <a class="navbar-brand" href="">@yield('title')</a>
                    </nav>
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
