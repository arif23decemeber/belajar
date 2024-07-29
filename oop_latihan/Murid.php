<?php

class Murid {
    private $nama;
    private $gender;
    private $usia;

    public function __construct($nama, $gender, $usia)
    {
        $this->nama = $nama;
        $this->gender = $gender;
        $this->usia = $usia;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function getUsia() {
        return $this->usia;
    }

    public function setUsia($usia) {
        $this->usia = $usia;
    }
}

?>