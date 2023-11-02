<?php

include("connection.php");

$query = mysqli_query($conn,"SELECT * FROM penerbit");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Penerbit</title>
  <style>
    body {
      font-family: Arial;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="index.php">Anggota</a>
          <a class="nav-link" href="buku.php">Buku</a>
          <a class="nav-link active" aria-current="page" href="penerbit.php">Penerbit</a>
          <a class="nav-link" href="pengarang.php">Pengarang</a>
        </div>
      </div>
    </div>
  </nav>
  <p class="text-center fs-3 fw-bold mt-3 mb-3">Data Penerbit</p>
  <a class="btn btn-primary mb-3 ms-3" href="tambah_data/tambah_penerbit.php" role="button">Tambah Data Penerbit</a>
  <table class="table table-bordered table-striped table-primary table-hover">
    <tr>
      <th>ID Penerbit</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Telp</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </tr>
    <?php
      foreach ($query as $data) {
    ?>
    <tr>
      <td><?php echo $data['id_penerbit']; ?></td>
      <td><?php echo $data['nama_penerbit']; ?></td>
      <td><?php echo $data['email']; ?></td>
      <td><?php echo $data['telp']; ?></td>
      <td><?php echo $data['alamat']; ?></td>
      <td>
        <a class="btn btn-warning btn-sm" href="edit/edit_penerbit.php?id=<?php echo $data["id_penerbit"]; ?>" role="button">Edit</a>
        <a class="btn btn-danger btn-sm" href="backend/delete/proses_delete_penerbit.php?id=<?php echo $data["id_penerbit"]; ?>" role="button" onclick="return confirm('Apakah anda yakin untuk menghapus item ini?')">Delete</a>
      </td>
    </tr>
    <?php } ?>
  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>