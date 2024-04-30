@extends('layouts.default')
@section('meta-tags')
    <title>MDB - Inicio</title>
   
@endsection
@section('custom-content-layout')
    <div class="section">
        <div class="container">
            <div class="row gy-5 gx-4 mb-16">

                <div class="inicio__container">
                    <div class="inicio__descripcion">
                        <h1 class="inicio__descripcion-titulo">
                            SUMÉRGETE EN <br> UN MUNDO DE
                            <br>
                            <span class="inicio__descripcion-titulo-resaltado">
                                EMOCIONES
                            </span>
                        </h1>
                        <p class="inicio__descripcion-texto">
                            Un universo de películas te espera para ser explorado, descubre nuevas favoritas y crea tu
                            propia colección cinematográfica.
                        </p>
                        <a class="inicio__descripcion-boton inicio__contacto-titulo-boton" href="">
                            Descubre más
                        </a>
                    </div>
                    <div class="inicio__banner">
                        <img src="{{ Vite::asset('resources/images/home/cinema-seccion1.jpg') }}"
                            alt="Imagen de palomitas de maiz de un cine" class="inicio__baner-img">
                    </div>
                </div>
                <!-- Sección de categorías -->
                <div class="inicio__categorias">
                    <h2 class="inicio__categorias-titulo">
                        Explora nuestras categorías
                    </h2>
                    <p class="inicio__categorias-descripcion">
                        El cine, ese arte mágico que nos transporta a mundos inimaginables y nos envuelve en historias
                        cautivadoras, se compone de un mosaico de géneros, cada uno con sus propias características,
                        atmósferas y emociones únicas. Embárcate en un viaje a través de los géneros cinematográficos más
                        populares y descubre los tesoros que te esperan en cada uno de ellos:
                    </p>

                    <ul class="inicio__categorias-lista row gy-5 gx-4">
                        {{-- Generos --}}
                        <li class="inicio__categoria">
                            <a href="" class="inicio__categoria-url">
                                <div class="inicio__categoria-gradient"></div>
                                <img src="" alt="" class="inicio__categoria-img">
                                <h3 class="inicio__categoria-nombre">

                                </h3>
                            </a>
                        </li>

                    </ul>

                </div>

                <!-- Sección de contacto -->
                <div class="inicio__contacto">
                    <h2 class="inicio__contacto-titulo">Descubre un mundo de películas que te <span
                            class="inicio__contacto-titulo-resaltado">esperan</span></h2>
                    <p class="inicio__contacto-descripcion">
                        Historias que te atraparán, personajes que te enamorarán. Explora y encuentra tu próxima favorita.
                    </p>
                    <a class="inicio__contacto-titulo-boton" href="">¡Empezar ya!</a>
                </div>
            </div>

        </div>
    </div>
@endsection
