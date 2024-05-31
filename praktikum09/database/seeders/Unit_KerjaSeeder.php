<?php

namespace Database\Seeders;

use App\Models\Unit_kerja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Unit_KerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unit_kerja::insert([
            [
                'nama' => 'Rumah Sakit Jakarta'
            ],
            [
                'nama' => 'Rumah Sakit Surabaya'
            ],
            [
                'nama' => 'Klinik Bandung'
            ],
            [
                'nama' => 'Puskesmas Yogyakarta'
            ],
            [
                'nama' => 'Rumah Sakit Semarang'
            ]
            ]);
    
    }
}
