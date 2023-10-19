<?php

echo 'Nomor 1 <br>';

for ($i=1;$i<=10;$i++) {
  if ($i%2== 0) {
    echo "Angka $i adalah bilangan genap <br>";
  } else {
    echo "Angka $i adalah bilangan ganjil <br>";
  }
}

echo "<br><br>";

echo 'Nomor 2 <br>';

for ($i=2000;$i<=2023;$i++) {
  if ($i%4== 0) {
    echo "Tahun $i adalah tahun kabisat <br>";
  } else {
    echo "Tahun $i bukan tahun kabisat <br>";
  }
}

echo "<br><br>";

echo 'Nomor 3 <br>';

for ($i=10;$i>0;$i--) {
  for ($j= 1;$j<$i ;$j++) {
    echo "$j";
  }
  echo "<br>";
}

?>