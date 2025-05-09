<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BarangController extends Controller
{
    public function index()
    {
        return view('barang', [
            'barangs' => Barang::all(),
        ]);
    }

    public function create()
    {
        return view('barang.barangCreate', [
            'barang' => Barang::all(),
        ]);
    }
}
