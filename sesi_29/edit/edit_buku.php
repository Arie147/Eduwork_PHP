<?php

include("../connection.php");

$isbn = $_GET["isbn"];

$query = mysqli_query($conn,"SELECT * FROM buku WHERE isbn = '$isbn'");

foreach ($query as $data) {
  $isbn = $data["isbn"];
  $judul = $data["judul"];
  $tahun = $data["tahun"];
  $id_penerbit = $data["id_penerbit"];
  $id_pengarang = $data["id_pengarang"];
  $id_katalog = $data["id_katalog"];
  $stok = $data["qty_stok"];
  $harga_pinjam = $data["harga_pinjam"];
}

$penerbit = mysqli_query($conn,"SELECT * FROM penerbit");
$pengarang = mysqli_query($conn,"SELECT * FROM pengarang");
$katalog = mysqli_query($conn,"SELECT * FROM katalog");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Buku</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
</head>
<body>
  <div class="container">
    <h1>Edit Buku</h1>
    <form id="form-edit" action="../backend/edit/proses_edit_buku.php?isbn=<?php echo $data["isbn"]; ?>" method="post">
      <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control" name="judul" id="judul" value="<?php echo $judul; ?>" required>
      </div>
      <div class="mb-3">
        <label for="tahun" class="form-label">Tahun</label>
        <input type="number" class="form-control" name="tahun" id="tahun" value="<?php echo $tahun; ?>" required>
      </div>
      <div class="mb-3">
        <label for="id_penerbit" class="form-label">ID Penerbit</label>
        <select class="form-select" name="id_penerbit">
          <?php
            foreach ($penerbit as $data) {
          ?>
            <option value="<?php if ($data['id_penerbit'] == $id_penerbit) { 
              echo $id_penerbit;
              } else {
              echo $data['id_penerbit'];
              } ?>" <?php if ($data['id_penerbit'] == $id_penerbit) { 
                echo "selected";
                } ?>
            ><?php if ($data['id_penerbit'] == $id_penerbit) { 
              echo $id_penerbit;
              } else {
              echo $data['id_penerbit'];
              } ?>
            </option>
          <?php } ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="id_pengarang" class="form-label">ID Pengarang</label>
        <select class="form-select" name="id_pengarang">
          <?php
            foreach ($pengarang as $data) {
          ?>
            <option value="<?php if ($data['id_pengarang'] == $id_pengarang) { 
              echo $id_pengarang;
              } else {
              echo $data['id_pengarang'];
              } ?>" <?php if ($data['id_pengarang'] == $id_pengarang) { 
                echo "selected";
                } ?>
            ><?php if ($data['id_pengarang'] == $id_pengarang) { 
              echo $id_pengarang;
              } else {
              echo $data['id_pengarang'];
              } ?>
            </option>
          <?php } ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="id_katalog" class="form-label">ID Katalog</label>
        <select class="form-select" name="id_katalog">
          <?php
            foreach ($katalog as $data) {
          ?>
            <option value="<?php if ($data['id_katalog'] == $id_katalog) { 
              echo $id_katalog;
              } else {
              echo $data['id_katalog'];
              } ?>" <?php if ($data['id_katalog'] == $id_katalog) { 
                echo "selected";
                } ?>
            ><?php if ($data['id_katalog'] == $id_katalog) { 
              echo $id_katalog;
              } else {
              echo $data['id_katalog'];
              } ?>
            </option>
          <?php } ?>
        </select>
      </div>
      <div class="mb-3">
        <label for="stok" class="form-label">Stok</label>
        <input type="number" class="form-control" name="stok" id="stok" value="<?php echo $stok; ?>" required>
      </div>
      <div class="mb-3">
        <label for="harga_pinjam" class="form-label">Harga Pinjam (Rp)</label>
        <input type="number" class="form-control" name="harga_pinjam" id="harga_pinjam" value="<?php echo $harga_pinjam; ?>" required>
      </div>
      <div class="mb-3">
        <button id="submit" type="submit" class="btn btn-primary" onclick="editData()">Submit</button>
        <a class="btn btn-primary" href="../buku.php" role="button">Cancel</a>
      </div>
    </form>
  </div>

  <script>
    $(document).ready(function(){
      $('#form-edit input').on('input', function() {
        var formFilled = true;
        $('#form-edit input').each(function() {
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

    function editData() {
      alert("Data berhasil diubah");
    }
  </script>
</body>
</html>