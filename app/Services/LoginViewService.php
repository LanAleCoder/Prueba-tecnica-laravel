<?php
namespace App\Services;

use Illuminate\Http\Client\Factory as HttpClientFactory;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class LoginViewService
{
    private $http;
    private $request;
    public function __construct(HttpClientFactory $http)
    {
        $this->http = $http;
    }

    public function login(Request $request)
    {
        $urlServer = env('APP_URL', 'http://localhost:8000/');
        $urlServerComplete = $urlServer . '/api/login';
        dd($urlServerComplete);
        $response = $this->http->post($urlServer.'/api/login', [
            'email' => $request->email,
            'password' => $request->password
        ]);

        Log::info('Se ha intentado iniciar sesión con el correo: ' . $request->email);

        // dd($response);
        if ($response->successful()) {
            $data = $response->json();
            return $data;
            // $request->session()->put('token', $data['token']);
            // return redirect()->route('iniciar-sesion');
        } else {
            return $response->json();
        }
    }
}