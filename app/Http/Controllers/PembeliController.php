<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;

class PembeliController extends Controller
{
    public function pembeli()
    {
        $query = Pembeli::all();
        return view('pembeli', compact('query'));
    }
}
