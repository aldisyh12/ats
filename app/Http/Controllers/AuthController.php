<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function formLoginAdmin()
    {
        return $this->authService->formLoginAdmin();
    }

    public function loginAdmin(Request $request)
    {
        return $this->authService->loginAdmin($request);
    }

    public function logout(Request $request)
    {
        return $this->authService->logout($request);
    }

    public function formRegisterUser()
    {
        return $this->authService->formRegisterUser();
    }

    public function registerUser(Request $request)
    {
        return $this->authService->registerUser($request);
    }
}
