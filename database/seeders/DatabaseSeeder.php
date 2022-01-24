<?php

namespace Database\Seeders;

use App\Models\produk;
use App\Models\kategori;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        produk::create([
            'produk' => 'sinzhui',
            'foto' => 'laravel.png',
            'id_kategori' => 1
        ]);

        produk::create([
            'produk' => 'lifeboy',
            'foto' => 'codeignater.png',
            'id_kategori' => 1
        ]);

        produk::create([
            'produk' => 'detol',
            'foto' => 'php.png',
            'id_kategori' => 1
        ]);

        kategori::create([
            'nama_kategori' => 'sabun'
        ]);

        kategori::create([
            'nama_kategori' => 'sampo'
        ]);
    }
}
