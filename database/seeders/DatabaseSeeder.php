<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Barang;
use App\Models\Jenis;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        Jenis::create([
            'nama_jenis' => 'Minyak',
        ]);

        Barang::create([
            'gambar' => 'gambar.jpg',
            'nama_barang' => 'Minyak bimoli 5L',
            'id_jenis' => 1,
            'harga_beli' => 150000,
            'harga_jual' => 200000,
            'stok' => 20,
        ]);
    }
}
