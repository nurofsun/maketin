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
        @include ('components.navbar')
        <main id="app" class="container">
            <section class="row">
                <div class="col-8">
                    @yield('content')
                </div>
                <aside class="col-4">
                    @yield('sidebar')
                </aside>
            </section>
        </main>
        <script src="{{ asset('js/app.js') }}"></script>
        @stack('scripts')
    </body>
</html>
