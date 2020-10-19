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
        <div id="app" class="container-fluid">
            <div class="row">
                <div class="col-2">
                    @include('components.menu')
                </div>
                <div class="col-10">
                    @include('components.navbar')
                    <main>
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        @stack('scripts')
    </body>
</html>
