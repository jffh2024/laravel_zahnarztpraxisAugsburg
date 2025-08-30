{{-- resources\views\layouts\en\main.blade.php --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title', 'Zahnarztpraxis Augsburg')</title>



    {{-- Vite für CSS-Dateien --}}
    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js'])


</head>

<body>
    {{-- de Navbar + Inhalt + Footer --}}
    @include('partials.en.navbar_o')
    @include('partials.en.navbar_u')

    {{-- @include('partials.de.slideshow') --}}
    {{-- @include('partials.de.warnung') --}}


    <main class="container py-3">
        @yield('content')
    </main>

    @include('partials.de.footer')



</body>

</html>
