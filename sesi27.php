<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sesi27</title>
</head>
<body>
  <div></div>
  <?php

  for ($i = 0; $i < 9; $i++) {
    for ($j = 0;$j <= $i; $j++) {
        echo "$j";
    }
    echo '<br>';
  }

  echo "<br>"

  ?>
  <table border="1" style="border-collapse:collapse; ">
    <tr style="padding:5px">
      <td style="background-color: rgb(92, 201, 255);">No</td>
      <td style="background-color: rgb(92, 201, 255);">Nama</td>
      <td style="background-color: rgb(92, 201, 255);">Kelas</td>
    </tr>
    <?php
      for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
          if ($i%2== 0) {
            echo "<td>$i</td>";
            echo "<td>Nama ke $i</td>";
            echo "<td>Kelas " .(11-$i)."</td>";
          } else {
            echo "<td style='background-color: lightgray'>$i</td>";
            echo "<td style='background-color: lightgray'>Nama ke $i</td>";
            echo "<td style='background-color: lightgray'>Kelas " .(11-$i)."</td>";
          }
        echo "</tr>";
      }
    ?>
  </table>

  <?php
 
  ?>
</body>
</html>