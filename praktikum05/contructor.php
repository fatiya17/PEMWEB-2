<?php

class kendaraan
{
    public $nama;
    public $warna;
    public $tempatOperasi;

    function __construct($nama, $warna, $tempatOperasi)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->tempatOperasi = $tempatOperasi;
    }
}

$Kendaraan = new kendaraan ("Mobil", "Merah", "Darat");
echo $Kendaraan->nama;
echo $Kendaraan->warna;
echo $Kendaraan->tempatOperasi;