<?php

class Sekolah {
    private $nama_sekolah;
    private $alamat;
    private $murid = [];

    public function __construct($nama_sekolah, $alamat) {
        $this->nama_sekolah = $nama_sekolah;
        $this->alamat = $alamat;
    }

    public function getNamaSekolah() {
        return $this->nama_sekolah;
    }

    public function setNamaSekolah($nama_sekolah) {
        $this->nama_sekolah = $nama_sekolah;
    }

    public function getAlamat() {
        return $this->alamat;
    }

    public function setAlamat($alamat) {
        $this->alamat = $alamat;
    }

    public function tambahMurid($murid) {
        $this->murid[] = $murid;
    }

    public function getMurid() {
        return $this->murid;
    }
}

?>
