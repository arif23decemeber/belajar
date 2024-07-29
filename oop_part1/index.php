<?php
require_once "Murid.php";
require_once "Sekolah.php";

// Membuat objek Murid
$murid1 = new Murid("Andi Malang", "Laki-laki");
$murid2 = new Murid("John Wick", "Laki-Laki");

// Membuat objek Sekolah
$sekolah = new Sekolah();

// Menambahkan murid ke dalam sekolah
$sekolah->tambahMurid($murid1);
$sekolah->tambahMurid($murid2);

// Menampilkan data murid di dalam sekolah
$sekolah->tampilkanMurid();

?>