<?php

namespace Database\Seeders;

use App\Models\Dokter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dokter::insert([
            [
                'nama' => 'Dr. John Doe',
                'gender' => 'L',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1980-05-15',
                'kategori' => 'Umum',
                'telpon' => '081234567890',
                'alamat' => 'Jakarta',
            ],
            [
                'nama' => 'Dr. Ani',
                'gender' => 'P',
                'tmp_lahir' => 'Surabaya',
                'tgl_lahir' => '1975-10-20',
                'kategori' => 'Spesialis',
                'telpon' => '082345678901',
                'alamat' => 'Surabaya',
            ],
            [
                'nama' => 'Dr. Michael Smith',
                'gender' => 'L',
                'tmp_lahir' => 'Bandung',
                'tgl_lahir' => '1982-03-25',
                'kategori' => 'Bidan',
                'telpon' => '083456789012',
                'alamat' => 'Bandung',
            ],
            [
                'nama' => 'Dr. Sarah Johnso',
                'gender' => 'P',
                'tmp_lahir' => 'Yogyakarta',
                'tgl_lahir' => '1978-08-10',
                'kategori' => 'Dokter Gigi',
                'telpon' => '084567890123',
                'alamat' => 'Yogyakarta',
            ],
            [
                'nama' => 'Dr. Robert Brown',
                'gender' => 'L',
                'tmp_lahir' => 'Semarang',
                'tgl_lahir' => '1985-12-05',
                'kategori' => 'Anastesi',
                'telpon' => '085678901234',
                'alamat' => 'Semarang',
            ],
            
            ]);
    }
}
