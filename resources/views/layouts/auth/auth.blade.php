<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/reset.css', 'resources/css/layout/auth/auth-style.css', 'resources/css/utils/utils-style.css'])

    {{-- Incluir nuevas meta etiquetas y la etiqueta de título --}}
    @yield('meta-tags-auth')
</head>


<body>

    <main class="main-content-auth">
        @yield('custom-content-auth', 'pagina')
    </main>

</body>

</html>
