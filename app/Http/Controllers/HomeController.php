<?php

namespace App\Http\Controllers;

use App\Enums\UnitStatus;
use App\Models\Unit;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('pages.home', [
            'units' => Unit::with('service')
                ->where('status', UnitStatus::AVAILABLE)
                ->paginate(10)
        ]);
    }
}
