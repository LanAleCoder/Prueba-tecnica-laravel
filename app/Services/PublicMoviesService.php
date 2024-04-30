<?php
namespace App\Services;
use Illuminate\Support\Facades\Http;

class PublicMoviesService
{

    private $httpClient;

    public function __construct(Http $http)
    {
        $this->http = $http;
    }


    // public function getMovies() {
    //     $response = $this->http->withHeaders([])
    // }

}