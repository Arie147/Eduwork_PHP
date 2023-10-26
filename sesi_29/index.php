<?php

include("connection.php");

$query = mysqli_query($conn,"SELECT nama, telp, email, judul, qty, tgl_pinjam, tgl_kembali FROM anggota JOIN peminjaman ON anggota.id_anggota = peminjaman.id_anggota JOIN detail_peminjaman ON peminjaman.id_pinjam = detail_peminjaman.id_pinjam JOIN buku ON detail_peminjaman.isbn = buku.isbn;");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>sesi29</title>
  <style>
    body {
      font-family: Arial;
    }
  </style>
</head>
<body>
  <p class="text-center fs-3 fw-bold">Data Peminjaman Buku</p>
  <table class="table table-bordered table-striped table-primary table-hover">
    <tr>
      <th>Nama</th>
      <th>Telepon</th>
      <th>Email</th>
      <th>Judul</th>
      <th>Quantity</th>
      <th>Tanggal Pinjam</th>
      <th>Tanggal Kembali</th>
    </tr>
    <?php
      while ($data = mysqli_fetch_array($query)) {
    ?>
    <tr>
      <td><?php echo $data['nama']; ?></td>
      <td><?php echo $data['telp']; ?></td>
      <td><?php echo $data['email']; ?></td>
      <td><?php echo $data['judul']; ?></td>
      <td><?php echo $data['qty']; ?></td>
      <td><?php echo $data['tgl_pinjam']; ?></td>
      <td><?php echo $data['tgl_kembali']; ?></td>
    </tr>
    <?php } ?>
  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>