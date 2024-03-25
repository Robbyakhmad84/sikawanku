<?php
require 'functions.php';

//ambil data di url
$id = $_GET["id"];
//var_dump($id);

//query data nama kab base on id
$namakab = query("SELECT * FROM shows WHERE id = $id")[0];

//contoh ambil data dari array numerik
//var_dump($namakab["luasawal"]);

//cek tombol submit sudah ditekan apa belum
if (isset($_POST["submit"])) {

    //cek apakah data berhsail diubah
    if (update($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil diupdate !');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diupdate !');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>

<body>
    <h1>Update Data</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $namakab["id"] ?>">
        <input type="hidden" name="luasawal" value="<?= $namakab["luasawal"]?>">
        <ul>
            <li>
                <label for="nama"> Kab/Kota Madya : <?= $namakab["nama"] ?> </label>
            </li>
            <li>
                <label for="luasawal">Luas Kumuh Awal : <?= $namakab["luasawal"] ?></label>
                
            <li>
                <label for="kumulatif">Kumulatif sd 2023 :</label>
                <input type="text" name="kumulatif" id="kumulatif" value="<?= $namakab["kumulatif"] ?>">
            </li>
            <li>
                <label for="sisakumuh">Sisa Luas Kumuh : <?= $namakab["sisakumuh"] ?></label>
                
            </li>
            <li><button type="submit" name="submit">Update Data !</button></li>
        </ul>
    </form>
</body>

</html>