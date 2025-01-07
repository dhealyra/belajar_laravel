<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang' => 'Televisi', 'Merk' => 'Samsung', 'harga' => 8000000],
            ['nama_barang' => 'Handphone', 'Merk' => 'Oppo', 'harga' => 2000000],
            ['nama_barang' => 'Mesin Cuci', 'Merk' => 'Polytron', 'harga' => 5000000],
            ['nama_barang' => 'Laptop', 'Merk' => 'Acer', 'harga' => 11000000],
            ['nama_barang' => 'Kulkas', 'Merk' => 'Samsung', 'harga' => 1000000]

        ];

        DB::table('barangs')->insert($barangs);
    }
}
