<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LoginViewService;

class LoginController extends Controller
{

    private $loginViewService;
    public function __construct(LoginViewService $loginViewService)
    {
        $this->loginViewService = $loginViewService;
    }

    public function login(Request $request)
    {
        // $credentials = [
        //     'email' => $request->email,
        //     'password' => $request->password
        // ];
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required'
        // ]);
        $response = $this->loginViewService->login($request);
        return $response->json();
    }
}
