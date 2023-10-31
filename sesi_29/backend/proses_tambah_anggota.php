<?php

include("../connection.php");

$nama = $_POST["nama"];
$username = $_POST["username"];
$password = $_POST["password"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$telp = $_POST["telp"];
$alamat = $_POST["alamat"];
$email = $_POST["email"];

$result = mysqli_query($conn,"INSERT INTO `anggota` (`nama`, `username`, `password`, `sex`, `telp`, `alamat`, `email`, `tgl_entry`, `role`) VALUES ('$nama', '$username', '$password', '$jenis_kelamin', '$telp', '$alamat', '$email', current_timestamp(), 'USER');");

header("Location:../index.php")

?>