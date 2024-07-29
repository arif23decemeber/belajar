<?php

class Sekolah {
    private $murid;

    public function __construct() {
        $this->murid = [];
    }

    public function tambahMurid($murid) {
        $this->murid[] = $murid;
    }

    public function tampilkanMurid() {
        foreach ($this->murid as $murid) {
            echo "Nama: " . $murid->getNama() . "</br>";
            echo "Jenis Kelamin: " . $murid->getJenisKelamin() . "</br></br>";
            echo "\n";
        }
    }
}

?>