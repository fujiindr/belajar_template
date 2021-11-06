<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;

class PesananController extends Controller
{
    public function pesanan()
    {
        $query = Pesanan::all();
        return view('pesanan', compact('query'));
    }
}
