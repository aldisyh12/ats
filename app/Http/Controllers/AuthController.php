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

    public function loginAdmin()
    {
        return $this->authService->loginAdmin();
    }

    public function registerUser()
    {
        return $this->authService->registerUser();
    }
}
