<?php

include("../connection.php");

$id = $_POST["id"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$telp = $_POST["telp"];
$alamat = $_POST["alamat"];


$result = mysqli_query($conn,"INSERT INTO `pengarang` (`id_pengarang`, `nama_pengarang`, `email`, `telp`, `alamat`) VALUES ('$id', '$nama', '$email', '$telp', '$alamat');");

header("Location:../pengarang.php")

?>