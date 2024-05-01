@extends('layouts.auth.auth')

@section('meta-tags-auth')
    <title>MDB - Iniciar sesión</title>
    @vite(['resources/css/pages/home/home-style.css'])
@endsection

@section('custom-content-auth')
    <div class="section-auth">
        <div class="form-auth-return">
            <a href="{{route('home')}}" class="form-auth-link-back">
                <img src="{{ Vite::asset('resources/images/auth/back.png') }}" class="form-auth-link-back__image"
                    alt="Imagen de flecha que indica regresar">
                Regresar
            </a>
        </div>
        <div class="container form-auth">
            <form action="/login" method="POST" class="form-auth__form">
                @csrf
                <div class="form-auth__inputs-container">

                    <div class="auth__form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" placeholder="Email">
                    </div>
                    <div class="auth__form-group">
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" placeholder="Contraseña">
                    </div>

                    <button class="form-auth__submit" type="submit">Iniciar sesión</button>
                </div>
            </form>
        </div>
    </div>
@endsection
