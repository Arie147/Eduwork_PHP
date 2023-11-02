<?php

include("../../connection.php");

$id = $_GET["id"];

$result = mysqli_query($conn,"DELETE FROM `anggota` WHERE `anggota`.`id_anggota` = $id;");

header("Location:../../index.php")

?>