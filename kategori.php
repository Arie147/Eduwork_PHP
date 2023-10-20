<?php

$nama = "budi";
$tinggi_badan = 170;
$berat_badan = 60;

$bmi = $berat_badan / (($tinggi_badan/100) ** 2);
floatval($bmi);

$hasil;

if ($bmi<18.5) {
  $hasil = "kurus";
} else if ($bmi<25) {
  $hasil = "sedang";
} else if ($bmi>25) {
  $hasil = "gemuk";
}

echo "Halo, $nama. Nilai BMI anda adalah " .round($bmi,1). ", anda termasuk $hasil";

?>