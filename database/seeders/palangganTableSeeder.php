<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class palangganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pelanggan')->insert([
            'nama' => 'John Doe',
            'jenis_kelamin' => 'L',
            'no_hp' => '08123456789',
            'riwayat_pembelian' => 'Belanja 1, Belanja 2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
