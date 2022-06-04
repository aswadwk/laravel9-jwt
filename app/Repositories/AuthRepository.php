<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;

class AuthRepository
{
    public function login($credentials)
    {
        return Auth::guard('api')->setTTL(5)->attempt($credentials);
    }
};