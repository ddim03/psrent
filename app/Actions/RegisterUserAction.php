<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterUserAction
{
    /**
     * Register a new user.
     *
     * @param  array  $attributes
     * @return bool
     */
    public function handle(array $attributes): bool
    {
        $user = DB::transaction(function () use ($attributes) {
            return User::create([
                'name' => $attributes['name'],
                'email' => $attributes['email'],
                'role' => 'member',
                'password' => bcrypt($attributes['password']),
            ]);
        });

        return Auth::attempt([
            'email' => $user->email,
            'password' => $attributes['password'],
        ]);
    }
}
