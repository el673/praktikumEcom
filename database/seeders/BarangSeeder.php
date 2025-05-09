<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            "nama_produk" => "Gelang Manik Dayak",
            "tipe_produk" => "Aksesoris",
            "jumlah_produk" => 50,
            "harga_produk" => 150000,
            "id_tipe" => 2
        ]);
        DB::table('barangs')->insert([
            "nama_produk" => "Tas Anyaman Rotan",
            "tipe_produk" => "Anyaman",
            "jumlah_produk" => 15,
            "harga_produk" => 150000,
            "id_tipe" => 4
        ]);
        DB::table('barangs')->insert([
            "nama_produk" => "Sasando",
            "tipe_produk" => "Alat Musik",
            "jumlah_produk" => 10,
            "harga_produk" => 2000000,
            "id_tipe" => 3
        ]);
        DB::table('barangs')->insert([
            "nama_produk" => "Ulos Batak",
            "tipe_produk" => "Kain",
            "jumlah_produk" => 25,
            "harga_produk" => 600000,
            "id_tipe" => 1
        ]);
    }
}
