<?php

include("../../connection.php");

$isbn = $_GET["isbn"];
$judul = $_POST["judul"];
$tahun = $_POST["tahun"];
$id_penerbit = $_POST["id_penerbit"];
$id_pengarang = $_POST["id_pengarang"];
$id_katalog = $_POST["id_katalog"];
$stok = $_POST["stok"];
$harga_pinjam = $_POST["harga_pinjam"];


$result = mysqli_query($conn,"UPDATE `buku` SET `judul` = '$judul', `tahun` = '$tahun', `id_penerbit` = '$id_penerbit', `id_pengarang` = '$id_pengarang', `id_katalog` = '$id_katalog', `qty_stok` = '$stok', `harga_pinjam` = '$harga_pinjam' WHERE `buku`.`isbn` = '$isbn';");

header("Location:../../buku.php")

?>