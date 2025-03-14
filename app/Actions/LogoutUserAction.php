<?php

namespace App\Actions;

use Illuminate\Support\Facades\Auth;

class LogoutUserAction
{
    public function handle($request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
    }
}
