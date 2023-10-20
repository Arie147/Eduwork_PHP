<?php

echo "Nomor 1 <br>";
for ($i = 1; $i <= 10; $i++) {
  echo "1 x $i = $i <br>";
}

echo "<br><br>";

echo "Nomor 2 <br>";
for ($i = 1; $i < 10; $i++) { //loop pertama untuk jumlah baris, ada 9 baris
  for ($j = 10; $j > $i; $j--) { //nested loop untuk banyaknya * setiap baris
    echo "*"; //menampilkan simbol *
  }
  echo "<br>"; //membuat baris baru setiap loop dijalankan
}

echo "<br><br>";

echo "Nomor 3 <br>";
for ($i = 1; $i < 10; $i++) { //loop pertama untuk jumlah baris, ada 9 baris
  for ($j = 0; $j < $i; $j++) { //nested loop untuk angka yang tampil di setiap baris
    echo "$j"; //menampilkan angka yang ada di variabel j
  }
  echo "<br>"; //membuat baris baru setiap loop dijalankan
}

?>