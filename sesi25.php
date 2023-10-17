<?php

echo 'Nomor 1 <br>';

$angka = 24;

if ($angka%2 == 0) {
  echo "$angka adalah Bilangan Genap";
} else {
  echo "$angka adalah Bilangan Ganjil";
}

echo "<br><br>";

echo 'Nomor 2 <br>';

$tahun = 2020;

if ($tahun%4 == 0) {
  echo "Tahun $tahun adalah Tahun Kabisat";
} else {
  echo "Tahun $tahun bukan Tahun Kabisat";
}

echo "<br><br>";

echo 'Nomor 3 <br>';

$nilai = 83;

if ($nilai >= 90 && $nilai <= 100) {
  echo "Nilai $nilai = Grade A";
} else if ($nilai >= 80 && $nilai <= 89) {
  echo "Nilai $nilai = Grade B";
} else if ($nilai >= 70 && $nilai <= 79) {
  echo "Nilai $nilai = Grade C";
} else if ($nilai >= 60 && $nilai <= 69) {
  echo "Nilai $nilai = Grade D";
} else if ($nilai < 60) {
  echo "Nilai $nilai = Grade E";
}

?>