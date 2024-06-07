<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>About Page</title>
</head>
<body>
{{-- prova link --}}
{{-- <nav>
    <ul> --}}
        {{-- passiamo l'etichetta piuttosto che un url che potrebbe cambiare nel tempo (nella scelta del progetto) --}}
      {{-- <li><a href="{{ route('home') }}">Home</a></li>
      <li><a href="{{ route('about') }}">About</a></li>
    </ul>
  </nav> --}}
{{-- /prova link --}}
@extends('layouts.app')
@section('content')
<h1>About</h1>
@endsection
  
</body>
</html>