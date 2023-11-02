<?php

include("../../connection.php");

$isbn = $_GET["isbn"];

$result = mysqli_query($conn,"DELETE FROM buku WHERE `buku`.`isbn` = '$isbn'");

header("Location:../../buku.php")

?>