<?php

include("../../connection.php");

$id = $_GET["id"];
$idBaru = $_POST["id"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$telp = $_POST["telp"];
$alamat = $_POST["alamat"];


$result = mysqli_query($conn,"UPDATE `penerbit` SET `id_penerbit` = '$idBaru', `nama_penerbit` = '$nama', `email` = '$email', `telp` = '$telp', `alamat` = '$alamat' WHERE `penerbit`.`id_penerbit` = '$id';");

header("Location:../../penerbit.php")

?>