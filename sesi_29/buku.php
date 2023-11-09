<?php

include("connection.php");

$query = mysqli_query($conn,"SELECT * FROM buku JOIN penerbit ON buku.id_penerbit = penerbit.id_penerbit JOIN pengarang ON buku.id_pengarang = pengarang.id_pengarang JOIN katalog ON buku.id_katalog = katalog.id_katalog ORDER BY isbn ASC;");

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
  <title>Buku</title>
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
          <a class="nav-link active" aria-current="page" href="buku.php">Buku</a>
          <a class="nav-link" href="penerbit.php">Penerbit</a>
          <a class="nav-link" href="pengarang.php">Pengarang</a>
        </div>
      </div>
    </div>
  </nav>
  <p class="text-center fs-3 fw-bold mt-3 mb-3">Data Buku</p>
  <a class="btn btn-primary mb-3 ms-3" href="tambah_data/tambah_buku.php" role="button">Tambah Data Buku</a>
  <table id="myTable" class="table table-bordered table-striped table-primary table-hover">
    <thead>
      <th>ISBN</th>
      <th>Judul</th>
      <th>Tahun</th>
      <th>Penerbit</th>
      <th>Pengarang</th>
      <th>Nama Katalog</th>
      <th>Stok</th>
      <th>Harga Pinjam</th>
      <th>Aksi</th>
    </thead>
    <?php
      foreach ($query as $data) {
    ?>
    <tr>
      <td><?php echo $data['isbn']; ?></td>
      <td><?php echo $data['judul']; ?></td>
      <td><?php echo $data['tahun']; ?></td>
      <td><?php echo $data['nama_penerbit']; ?></td>
      <td><?php echo $data['nama_pengarang']; ?></td>
      <td><?php echo $data['nama']; ?></td>
      <td><?php echo $data['qty_stok']; ?></td>
      <td><?php echo "Rp ".number_format($data['harga_pinjam']); ?></td>
      <td>
        <a class="btn btn-warning btn-sm" href="edit/edit_buku.php?isbn=<?php echo $data["isbn"]; ?>" role="button">Edit</a>
        <a class="btn btn-danger btn-sm" href="backend/delete/proses_delete_buku.php?isbn=<?php echo $data["isbn"]; ?>" role="button" onclick="return confirm('Apakah anda yakin untuk menghapus item ini?')">Delete</a>
      </td>
    </tr>
    <?php } ?>
  </table>

  <script>
    $(document).ready( function () {
      $('#myTable').DataTable();
    } );
  </script>
</body>
</html>