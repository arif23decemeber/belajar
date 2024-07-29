<?php
include_once 'data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <p>Nama Sekolah : <?php echo $sekolah->getNamaSekolah(); ?></p>
    <p>Daftar Nama Murid : </p>
    <ol>
        <?php
            foreach($sekolah->getMurid() as $murid) {
                echo "<li>".$murid->getNama()." - ".$murid->getGender()."</li>";
            }
        ?>
    </ol>
</body>
</html>