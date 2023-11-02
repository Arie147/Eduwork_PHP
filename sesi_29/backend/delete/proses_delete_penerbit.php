<?php

include("../../connection.php");

$id = $_GET["id"];

$result = mysqli_query($conn,"DELETE FROM `penerbit` WHERE `penerbit`.`id_penerbit` = '$id';");

header("Location:../../penerbit.php")

?>