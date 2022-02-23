<?php

namespace App\Http\Controllers;

use App\Models\Arbitrator;
use Illuminate\Http\Request;

class ArbitratorController extends Controller
{
    //
    public function showArbitrators()
    {
        return view('dashboard.arbitros');
    }

    public function getArbitrators()
    {
        $arbitrators = Arbitrator::orderByDesc('created_at')->get();
        $arbitrators = $arbitrators->map(fn($a) => [
            'name' => $a->name,
            'state' => $a->state ? true : false,
            'created_at' => $a->created_at->format("d/m/Y h:m:s")
        ]);
        return response()->json($arbitrators);
    }
}
