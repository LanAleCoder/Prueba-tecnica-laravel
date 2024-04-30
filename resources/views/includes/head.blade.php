<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/reset.css'])
    @vite(['resources/css/layout/layout-style.css'])
    @vite(['resources/css/utils/utils-style.css'])
    @vite(['resources/css/header/header-style.css'])
    @vite(['resources/css/footer/footer-style.css'])
    @vite(['resources/css/pages/home/home-style.css'])
    {{-- Incluir nuevas meta etiquetas y la etiqueta de título --}}
    @yield('meta-tags')
</head>
