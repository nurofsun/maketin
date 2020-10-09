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
      @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
