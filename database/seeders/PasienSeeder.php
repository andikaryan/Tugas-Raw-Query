<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pasien')->insert([
            // Ini adalah atribut dari tiap tiap kolom yang ada di tabel pasien
        	'nama' => 'Hafiz',
            'ruangan' => 'Mawar 1',
            'penyakit' => 'Demam'
        ]);
    }
}
