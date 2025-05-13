<?php

namespace App\Http\Controllers\Api;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Barang::with('Tipe')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string',
            'jumlah_produk' => 'required|integer',
            'harga_produk' => 'required|numeric',
            'id_tipe' => 'required|exists:tipes,id',
        ]);
        $barang = Barang::create($request->all());
        return response()->json($barang, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang = Barang::with('Tipe')->findOrFail($id);
        return response()->json($barang);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->update($request->all());
        return response()->json($barang);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Barang::destroy($id);
        return response()->json(null, 204);
    }
}
