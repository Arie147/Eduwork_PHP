<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sesi28</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial;
    }

    header {
      background-color: orange;
      padding: 15px 30px;
    }

    p {
      font-size: 20px;
      margin: 0;
    }

    .tabel_nilai {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 90vh;
    }

    table,td {
      border: 1px solid lightgray;
      border-collapse: collapse;
    }

    .head {
      font-weight: bold;
    }

    td {
      padding: 15px 25px 15px 10px;
    }

    .data {
      background-color: rgb(236, 236, 236);
    }
  </style>
</head>
<body>
  <header>
    <p>Daftar Nilai</p>
  </header>
  <div class="tabel_nilai">
    <table>
      <tr>
        <td class="head">No.</td>
        <td class="head">Nama</td>
        <td class="head">Tanggal Lahir</td>
        <td class="head">Umur</td>
        <td class="head">Alamat</td>
        <td class="head">Kelas</td>
        <td class="head">Nilai</td>
        <td class="head">Hasil</td>
      </tr>
      <?php
        $data = file_get_contents ("data.json");

        $students = json_decode($data);

        $no = 1;

        foreach ($students as $key => $student) {
          $tahun_sekarang = date("Y");
          $tahun_lahir = date("Y", strtotime($student->tanggal_lahir));
          $umur = $tahun_sekarang - $tahun_lahir;
          $newFormat = date("d F Y", strtotime($student->tanggal_lahir));

          echo "<tr>";
            if ($key%2== 0) {
              echo "<td class='data'>$no.</td>";
              echo "<td class='data'>".$student->nama."</td>";
              echo "<td class='data'>".$newFormat."</td>";
              echo "<td class='data'>".$umur." tahun</td>";
              echo "<td class='data'>".$student->alamat."</td>";
              echo "<td class='data'>".$student->kelas."</td>";
              echo "<td class='data'>".$student->nilai."</td>";
              if ($student->nilai >= 90) {
                echo "<td class='data'>A</td>";
              } else if ($student->nilai >= 80) {
                echo "<td class='data'>B</td>";
              } else if ($student->nilai >= 70) {
                echo "<td class='data'>C</td>";
              } else if ($student->nilai < 70) {
                echo "<td class='data'>D</td>";
              }
            } else {
              echo "<td>$no.</td>";
              echo "<td>".$student->nama."</td>";
              echo "<td>".$newFormat."</td>";
              echo "<td>".$umur." tahun</td>";
              echo "<td>".$student->alamat."</td>";
              echo "<td>".$student->kelas."</td>";
              echo "<td>".$student->nilai."</td>";
              if ($student->nilai >= 90) {
                echo "<td>A</td>";
              } else if ($student->nilai >= 80) {
                echo "<td>B</td>";
              } else if ($student->nilai >= 70) {
                echo "<td>C</td>";
              } else if ($student->nilai < 70) {
                echo "<td>D</td>";
              }
            }
          echo "</tr>";

          $no++;
        }
      ?>
    </table>
  </div>
  
<?php






?>
</body>
</html>
