<?php

class penilaian
{
    public $nim, $mata_kuliah, $nilai;

    function __construct($nim, $mata_kuliah, $nilai)
    {
        $this->nim = $nim;
        $this->mata_kuliah = $mata_kuliah;
        $this->nilai = $nilai;
    }

    public function hasilujian()
    {
        $nilai = $this->nilai;
        if ($nilai >= 80) {
            return "A";
        } else if ( $nilai <= 70 && $nilai > 60) {
            return "B";
        } else if ($nilai <= 60 && $nilai > 50) {
            return "C";
        } else if ($nilai <= 50 && $nilai > 40) {
            return "D";
        } else {
            return "-";
        }
    }

    public function grade()
    {
        $nilai = $this->hasilujian();
        if ($nilai === "A" || $nilai === "B") {
            return "LULUS";
        } else {
            return "TIDAK LULUS";
        }
    }
    }
