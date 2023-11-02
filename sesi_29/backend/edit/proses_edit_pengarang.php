<?php

include("../../connection.php");

$id = $_GET["id"];
$idBaru = $_POST["id"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$telp = $_POST["telp"];
$alamat = $_POST["alamat"];


$result = mysqli_query($conn,"UPDATE `pengarang` SET `id_pengarang` = '$idBaru', `nama_pengarang` = '$nama', `email` = '$email', `telp` = '$telp', `alamat` = '$alamat' WHERE `pengarang`.`id_pengarang` = '$id';");

header("Location:../../pengarang.php")

?>