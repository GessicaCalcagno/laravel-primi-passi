<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    {{-- Per includere una sola porzione usa include! --}}
    @include('partials.header')
    <main>
    </p>Se scrivo qui questo di ripete in tutte le pagine,ciao!<p>
        {{-- Qui viene inserito il contenuto di ogni pagina
        @yeld è un segna posto strettamente collegato a @section --}}
     @yield('content')
    </main>

    <footer>
        <h1>Footer</h1>
    </footer>
</body>
</html>