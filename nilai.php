<?php

$nilai = 83;

switch ($nilai) {
  case $nilai >= 90:
    echo "Nilai A";
    break;
  case $nilai >= 80:
    echo "Nilai B";
    break;
  case $nilai >= 70:
    echo "Nilai C";
    break;
  case $nilai < 70: 
    echo "Nilai D";
    break;
  default:
    echo "Nilai Salah";
    break;
}

?>