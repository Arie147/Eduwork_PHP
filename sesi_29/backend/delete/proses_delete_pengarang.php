<?php

include("../../connection.php");

$id = $_GET["id"];

$result = mysqli_query($conn,"DELETE FROM `pengarang` WHERE `pengarang`.`id_pengarang` = '$id';");

header("Location:../../pengarang.php")

?>