<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ✅ tambahkan baris ini

class pelangganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('pelanggan')->insert([
            'nama' => 'Budi Santoso',
            'jenis_kelamin' => 'L',
            'no_hp' => '081234567890',
            'riwayat_pembelian' => 'Indomie Goreng, Teh Botol',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
