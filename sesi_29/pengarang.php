<?php

include("connection.php");

$query = mysqli_query($conn,"SELECT * FROM pengarang");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
  <title>Pengarang</title>
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
          <a class="nav-link" href="penerbit.php">Penerbit</a>
          <a class="nav-link active" aria-current="page" href="pengarang.php">Pengarang</a>
        </div>
      </div>
    </div>
  </nav>
  <p class="text-center fs-3 fw-bold mt-3 mb-3">Data Pengarang</p>
  <a class="btn btn-primary mb-3 ms-3" href="tambah_data/tambah_pengarang.php" role="button">Tambah Data Pengarang</a>
  <table id="table-data" class="table table-bordered table-striped table-primary table-hover">
    <thead>
      <th>ID Pengarang</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Telp</th>
      <th>Alamat</th>
      <th>Aksi</th>
    </thead>
    <?php
      foreach ($query as $data) {
    ?>
    <tr>
      <td><?php echo $data['id_pengarang']; ?></td>
      <td><?php echo $data['nama_pengarang']; ?></td>
      <td><?php echo $data['email']; ?></td>
      <td><?php echo $data['telp']; ?></td>
      <td><?php echo $data['alamat']; ?></td>
      <td>
        <a class="btn btn-warning btn-sm" href="edit/edit_pengarang.php?id=<?php echo $data["id_pengarang"]; ?>" role="button">Edit</a>
        <a class="btn btn-danger btn-sm" href="backend/delete/proses_delete_pengarang.php?id=<?php echo $data["id_pengarang"]; ?>" role="button" onclick="return confirm('Apakah anda yakin untuk menghapus item ini?')">Delete</a>
      </td>
    </tr>
    <?php } ?>
  </table>

  <script>
    $(document).ready( function () {
      $('#table-data').DataTable();
    } );
  </script>
</body>
</html>