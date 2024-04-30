<?php
namespace App\Services;

class TokenExternalAPIService
{
    public function getToken(): string
    {
        return env('TOKEN_API_TMDB');
    }
}