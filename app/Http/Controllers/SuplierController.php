<?php

namespace App\Http\Controllers;

use App\Models\Suplier;

class SuplierController extends Controller
{
    public function suplier()
    {
        $query = Suplier::all();
        return view('suplier', compact('query'));
    }

}
