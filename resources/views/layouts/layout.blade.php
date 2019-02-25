<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', 'Boolean.careers')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    </head>
    <body>

      <div id="main_container">

        @include('includes.navbar')

        <div id="page_content">

          @yield('content')

        </div>

      </div>

      <!-- JS -->
      <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>

    </body>
</html>
