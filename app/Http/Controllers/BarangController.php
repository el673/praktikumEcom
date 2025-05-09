<?php

namespace App\Http\Controllers;

use App\Models\Tipe;
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
        return view('barangCreate', [
            'tipes' => Tipe::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' =>  'required|max:255',
            'jumlah_produk' =>  'required',
            'harga_produk' =>  'required',
            'id_tipe'    =>  'required'
        ]);

        Barang::create([
            'nama_produk' => $request->nama_produk,
            'jumlah_produk' => $request->jumlah_produk,
            'harga_produk' => $request->harga_produk,
            'id_tipe' => $request->id_tipe
        ]);

        return redirect('/barang')->with('success', "Tambah Data Berhasil");
    }
}
