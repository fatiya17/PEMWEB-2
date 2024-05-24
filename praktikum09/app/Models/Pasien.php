<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = "pasiens"; //nama table yang dignakan

    //kolom yang dapat diisi di tabel pasien
    protected $fillable = [
        'kode',
        'nama',
        'tmp-lahir',
        'tgl_lahir',
        'gender',
        'email',
        'alamat',
    ];

}
