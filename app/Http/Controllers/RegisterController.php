<?php

namespace App\Http\Controllers;

use App\Actions\RegisterUserAction;
use App\Http\Requests\RegisterUserRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.auth.register');
    }

    public function store(RegisterUserRequest $request, RegisterUserAction $action)
    {
        $action->handle($request->validated());
        return to_route('home');
    }
}
