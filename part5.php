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

// Membuat objek Murid
$murid1 = new Murid("Muhamad Arif Syam", "Laki-laki");
$murid2 = new Murid("John Wick", "Laki-Laki");

// Membuat objek Sekolah
$sekolah = new Sekolah();

// Menambahkan murid ke dalam sekolah
$sekolah->tambahMurid($murid1);
$sekolah->tambahMurid($murid2);

// Menampilkan data murid di dalam sekolah
$sekolah->tampilkanMurid();

?>
