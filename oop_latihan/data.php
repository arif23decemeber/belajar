<?php

require_once "Murid.php";
require_once "Sekolah.php";

$murid1 = new Murid("Andi", "Laki-laki", 21);
$murid2 = new Murid("Budi", "Laki-laki", 21);

$sekolah = new Sekolah("SD Negeri 1 Jakarta");



$sekolah->tambahMurid($murid1);
$sekolah->tambahMurid($murid2);

//$sekolah->tampilkanMurid();


?>

