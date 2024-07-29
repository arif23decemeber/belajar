<?php

include 'Murid.php';
include 'Sekolah.php';

// Membuat objek Murid
$murid1 = new Murid("Muhamad Arif Syam", "Laki-laki");
$murid2 = new Murid("Siti Aminah", "Perempuan");

// Membuat objek Sekolah
$sekolah = new Sekolah("SDN 1 Jakarta", "Jl. Merdeka No. 10");

// Menambahkan murid ke sekolah
$sekolah->tambahMurid($murid1);
$sekolah->tambahMurid($murid2);

// Menampilkan informasi sekolah dan murid
echo "Nama Sekolah: " . $sekolah->getNamaSekolah() . "<br>";
echo "Alamat: " . $sekolah->getAlamat() . "<br>";
echo "Daftar Murid:<br>";

foreach ($sekolah->getMurid() as $murid) {
    echo "- " . $murid->getNama() . " (" . $murid->getJenisKelamin() . ")<br>";
}

?>
