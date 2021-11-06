<?php

namespace App\Http\Controllers;

use App\Models\Barang;

class BarangController extends Controller
{
    public function tampilkan()
    {
        $barang = Barang::all();
        return view('barang', compact('barang'));
    }
}
