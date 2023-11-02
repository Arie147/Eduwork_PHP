<?php

include("../../connection.php");

$id = $_GET["id"];
$nama = $_POST["nama"];
$username = $_POST["username"];
$password = $_POST["password"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$telp = $_POST["telp"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];

$result = mysqli_query($conn,"UPDATE `anggota` SET `nama` = '$nama', `username` = '$username', `password` = '$password', `sex` = '$jenis_kelamin', `telp` = '$telp', `alamat` = '$alamat', `email` = '$email' WHERE `anggota`.`id_anggota` = $id;");

header("Location:../../index.php")

?>