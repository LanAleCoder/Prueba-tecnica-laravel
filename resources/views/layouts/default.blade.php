<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@extends('includes.head')

<body>

    @include('includes.header')

    <main class="main-content">
        @yield('custom-content-layout')
    </main>

    @include('includes.footer')

</body>

</html>
