<?php

namespace App\Http\Controllers;

use App\Services\PublicMoviesService;

class HomeController extends Controller
{
    private $publicMoviesService;
    public function __construct(PublicMoviesService $publicMoviesService)
    {
        $this->publicMoviesService = $publicMoviesService;
    }

    public function index()
    {
        $movies = $this->publicMoviesService->getMovies();
        
        return view('pages.home', compact('movies'));
    }
}
