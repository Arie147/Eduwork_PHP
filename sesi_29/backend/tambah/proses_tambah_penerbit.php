<?php

include("../../connection.php");

$id = $_POST["id"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$telp = $_POST["telp"];
$alamat = $_POST["alamat"];


$result = mysqli_query($conn,"INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `email`, `telp`, `alamat`) VALUES ('$id', '$nama', '$email', '$telp', '$alamat');");

header("Location:../../penerbit.php")

?>