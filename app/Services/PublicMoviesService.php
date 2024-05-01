<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Services\TokenExternalAPIService;

class PublicMoviesService
{
    private $tokenService;

    public function __construct(TokenExternalAPIService $tokenService)
    {
        $this->tokenService = $tokenService;
    }


    public function getMovies()
    {
        $tokenAPI = $this->tokenService->getToken();
        $apiURL = env('BASE_URL_API_MOVIES');
        $response = Http::withToken($tokenAPI)->acceptJson()->get($apiURL . '/discover/movie');
        if ($response->successful()) {
            $moviesData = $response->json();
            $movies = $moviesData['results'];
            $movies = array_slice($movies, 0, 4);

            return $movies;
        }
    }

}