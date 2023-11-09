<?php

include("../connection.php");

$penerbit = mysqli_query($conn,"SELECT * FROM penerbit");
$pengarang = mysqli_query($conn,"SELECT * FROM pengarang");
$katalog = mysqli_query($conn,"SELECT * FROM katalog");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Buku</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
</head>
<body>
  <div class="container">
    <h1>Tambah Buku</h1>
    <form id="form-add" action="../backend/tambah/proses_tambah_buku.php" method="post">
      <div class="mb-3">
        <label for="isbn" class="form-label">ISBN</label>
        <input type="text" class="form-control" name="isbn" id="isbn" required>
      </div>
      <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" required>
      </div>
      <div class="mb-3">
        <label for="tahun" class="form-label">Tahun</label>
        <input type="number" class="form-control" name="tahun" id="tahun" required>
      </div>
      <div class="mb-3">
        <label for="id_penerbit" class="form-label">ID Penerbit</label>
        <select class="form-select" name="id_penerbit">
          <?php
            foreach ($penerbit as $data) {
          ?>
            <option value="<?php echo $data['id_penerbit']; ?>"><?php echo $data['id_penerbit']; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="id_pengarang" class="form-label">ID Pengarang</label>
        <select class="form-select" name="id_pengarang">
          <?php
            foreach ($pengarang as $data) {
          ?>
            <option value="<?php echo $data['id_pengarang']; ?>"><?php echo $data['id_pengarang']; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="id_katalog" class="form-label">ID Katalog</label>
        <select class="form-select" name="id_katalog">
          <?php
            foreach ($katalog as $data) {
          ?>
            <option value="<?php echo $data['id_katalog']; ?>"><?php echo $data['id_katalog']; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="stok" class="form-label">Stok</label>
        <input type="number" class="form-control" name="stok" id="stok" required>
      </div>
      <div class="mb-3">
        <label for="harga_pinjam" class="form-label">Harga Pinjam (Rp)</label>
        <input type="number" class="form-control" name="harga_pinjam" id="harga_pinjam" required>
      </div>
      <div class="mb-3">
        <button id="submit" type="submit" class="btn btn-primary" onclick="addData()">Submit</button>
        <a class="btn btn-primary" href="../buku.php" role="button">Cancel</a>
      </div>
    </form>
  </div>

  <script>
    $(document).ready(function(){
      $('#form-add input').on('input', function() {
        var formFilled = true;
        $('#form-add input').each(function() {
          if ($(this).val() === '') {
            formFilled = false;
          }
        });
        if (formFilled) {
          $('#submit').prop('disabled', false);
        } else {
          $('#submit').prop('disabled', true);
        }
      });
    });

    function addData() {
      alert("Data berhasil ditambahkan");
    }
  </script>
</body>
</html>