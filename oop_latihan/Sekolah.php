<?php

class Sekolah {
    private $murid;
    private $nama_sekolah;
    private $alamat;

    public function __construct($nama_sekolah) {
        $this->nama_sekolah = $nama_sekolah;

    }

    public function tambahMurid($murid) {
        $this->murid[] = $murid;
    }

    public function getNamaSekolah() {
        return $this->nama_sekolah;
    }

    public function setNamaSekolah($nama_sekolah){
        $this->nama_sekolah = $nama_sekolah;
    }

    public function getMurid() {
        return $this->murid;
    }

    

    public function tampilkanMurid() {
        foreach($this->murid as $murid) {
            echo "Nama : ". $murid->getNama()."</br>";
            echo "Gender : ". $murid->getGender()."</br>";
            echo "</br></br>";
        }
    }
}


?>