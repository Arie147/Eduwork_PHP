<?php

echo "Nomor 1 <br>";
$array1 = array("satu", "dua", "tiga", "empat", "lima");
$reversedArray = array_reverse($array1);

foreach ($reversedArray as $value) {
    echo "$value <br>";
}
echo "<br>";

echo "Nomor 2 <br>";
$array2 = array("apel", "nanas", "mangga", "jeruk");
$count = 0;

foreach ($array2 as $value) {
  $count++;
}

echo "Terdapat $count buah";
echo "<br>";
echo "<br>";

echo "Nomor 3 <br>";
$array3 = array(7,3,4,9);
$total = 0;

foreach($array3 as $value) {
  $total += $value;
};

echo "Totalnya adalah $total";
echo "<br>";
echo "<br>";

echo "Nomor 4 <br>";
for ($i = 1; $i <= 10; $i++) {
  echo "1x$i=$i <br>";
}

?>