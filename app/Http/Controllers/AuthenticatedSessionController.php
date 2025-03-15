<?php

namespace App\Http\Controllers;

use App\Actions\LoginUserAction;
use App\Actions\LogoutUserAction;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('pages.auth.login');
    }

    public function store(LoginRequest $request, LoginUserAction $action)
    {
        if ($action->handle($request->validated())) {
            $request->session()->regenerate();
            return to_route('home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function destroy(Request $request, LogoutUserAction $action)
    {
        $action->handle($request);
        return to_route('home');
    }
}
