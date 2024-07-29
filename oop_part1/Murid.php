<?php

class Murid {
    private $nama;
    private $jenis_kelamin;

    public function __construct($nama, $jenis_kelamin) {
        $this->nama = $nama;
        $this->jenis_kelamin = $jenis_kelamin;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getJenisKelamin() {
        return $this->jenis_kelamin;
    }

    public function setJenisKelamin($jenis_kelamin) {
        $this->jenis_kelamin = $jenis_kelamin;
    }
}

?>