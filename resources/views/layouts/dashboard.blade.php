<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name') }} - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="all">
        <script src="{{ asset('fontawesome/js/all.min.js') }}"></script>
        @yield('head')
    </head>
    <body>
        @include ('components.navbar')
        <div id="app" class="container-fluid pt-5">
            <section class="row no-gutters">
                <div class="col-12 col-md-2">
                    @include('components.menu')
                </div>
                <main class="col-12 col-md-10">
                    @yield('content')
                </main>
            </section>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        @stack('scripts')
    </body>
</html>
