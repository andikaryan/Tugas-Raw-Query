<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('obat')->insert([
            // Ini adalah atribut dari tiap tiap kolom yang ada di tabel pasien
        	'nama' => 'Paracetamol',
            'harga' => 20000,
            'kegunaan' => 'Menurunkan panas'
        ]);
    }
}
