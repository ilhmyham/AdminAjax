<?php

namespace Database\Seeders;

use App\Models\produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        produk::create([
            'produk' => 'sinzhui',
            'foto' => 'foto 1',
            'id_kategori' => 1
        ]);

        produk::create([
            'produk' => 'lifeboy',
            'foto' => 'foto 2',
            'id_kategori' => 1
        ]);

        produk::create([
            'produk' => 'detol',
            'foto' => 'foto 3',
            'id_kategori' => 1
        ]);
    }
}
