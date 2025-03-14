<?php

namespace App\Actions;

use Illuminate\Support\Facades\Auth;

class LoginUserAction
{
    public function handle(array $credentials)
    {
        return Auth::attempt([
            'email' => $credentials['email'],
            'password' => $credentials['password'],
        ], $credentials['remember'] ?? false);
    }
}
