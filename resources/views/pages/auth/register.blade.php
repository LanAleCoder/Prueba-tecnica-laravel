@extends('layouts.auth.auth')

@section('meta-tags-auth')
    <title>MDB - Registro</title>
@endsection

@section('custom-content-auth')
    <div class="section-auth">
        <div class="form-auth-return">
            <a href="{{ route('home') }}" class="form-auth-link-back">
                <img src="{{ Vite::asset('resources/images/auth/back.png') }}" class="form-auth-link-back__image"
                    alt="Imagen de flecha que indica regresar">
                Regresar
            </a>
        </div>
        <div class="container form-auth">
            <form action="" method="POST" class="form-auth__form">
                @csrf
                <div class="form-auth__inputs-container">
                    <div class="auth__form-group">
                        <label for="name">Nombre</label>
                        <input id="name" type="text" placeholder="Nombre">
                    </div>
                    <div class="auth__form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" placeholder="Email">
                    </div>
                    <div class="auth__form-group">
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" placeholder="Contraseña">
                    </div>
                    <div class="auth__form-group">
                        <label for="repeat_password">Confirmar contraseña</label>
                        <input id="repeat_password" type="password" placeholder="Confirmar contraseña">
                    </div>
                    <button class="form-auth__submit" type="submit">Registrarse</button>
                </div>
            </form>
        </div>
    </div>
@endsection
