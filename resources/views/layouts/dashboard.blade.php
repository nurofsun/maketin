<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name') }} - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="all">
        <script src="{{ asset('fontawesome/js/all.min.js') }}"></script>
    </head>
    <body>
        <div id="app">
            <main id="content">
                <div class="row no-gutters">
                    <div class="col-12 col-md-2">
                        <aside class="d-flex flex-column">
                            <ul class="nav flex-column bg-white shadow rounded-lg vh-100">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">
                                        <i class="fas fa-home"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('student.list') }}">
                                        <i class="fas fa-users"></i>
                                        Students
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-money-bill-alt"></i>
                                        Payment
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-12 col-md-10">
                        <div class="container-fluid py-3">
                            <header id="top">
                                <nav class="navbar navbar-light bg-white navbar-expand-lg navbar-fixed-top rounded-lg">
                                    <div class="container">
                                        <a class="navbar-brand font-weight-bold" href="{{ route('home') }}">
                                            {{ $title }}
                                        </a>
                                        <div class="ml-auto">
                                            @yield('action')
                                        </div>
                                    </div>
                                </nav>
                            </header>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </main>
            <footer id="bottom">
                <p class="text-center">
                {{ config('app.name') }} &copy; 2020
                </p>
            </footer>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
