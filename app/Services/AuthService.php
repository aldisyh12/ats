<?php

namespace App\Services;

class AuthService
{
    public function loginAdmin()
    {
        return view('admin.auth.login');
    }

    public function registerUser()
    {
        return view('user.auth.register');
    }
}
