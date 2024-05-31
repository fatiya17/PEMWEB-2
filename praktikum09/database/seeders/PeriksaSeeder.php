<?php

namespace Database\Seeders;

use App\Models\Periksa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        Periksa::insert([
            [
                'tanggal' => '2024-03-01',
                'berat' => '65.5',
                'tinggi' => '170',
                'tensi' => '120/80',
                'keterangan' => 'Normal',
            ],
            [
                'tanggal' => '2024-03-05',
                'berat' => '70',
                'tinggi' => '165',
                'tensi' => '130/85',
                'keterangan' => 'Perlu pemantauan lebih lanjut',
            ],
            [
                'tanggal' => '2024-03-10',
                'berat' => '72',                
                'tinggi' => '175',
                'tensi' => '140/95',
                'keterangan' => 'Perlu tindakan medis',
            ],
            [
                'tanggal' => '2024-03-15',
                'berat' => '68.5',                
                'tinggi' => '168',
                'tensi' => '125/82',
                'keterangan' => 'Normal',
            ],
            [
                'tanggal' => '2024-03-20',
                'berat' => '75',                
                'tinggi' => '180',
                'tensi' => '135/88',
                'keterangan' => 'Perlu pemantauan lebih lanjut',
            ],
            ]);
    }
}