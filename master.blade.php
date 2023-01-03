<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

@include('include.style');
    </head>
    <body class="antialiased">

@include('include.navbar');
<div class="container">
    @yield('content')

</div>
        @include('include.script');
    </body>
</html>
