<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
       
    </head>
    <body class="antialiased">
{{-- prova link --}}
<nav>
    <ul>
      <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('about') }}">About</a></li>
    </ul>
  </nav>
{{-- /prova link --}}
       <h2>HELLO WORLD</h2>
       <h3>{{$username}} {{$greeting}}</h3>
    </body>
</html>
