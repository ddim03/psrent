<?php

namespace App\Http\Controllers;

use App\Models\Unit;

class HomeController extends Controller
{
    public function __invoke()
    {
        $units = Unit::with('service')->paginate(10);
        return view('pages.home', [
            'units' => $units
        ]);
    }
}
