<?php

include("../connection.php");

$id = $_GET["id"];

$query = mysqli_query($conn,"SELECT * FROM penerbit WHERE id_penerbit = '$id'");

foreach ($query as $data) {
  $id = $data["id_penerbit"];
  $nama = $data["nama_penerbit"];
  $email = $data["email"];
  $telp = $data["telp"];
  $alamat = $data["alamat"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Penerbit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
</head>
<body>
  <div class="container">
    <h1>Edit Penerbit</h1>
    <form id="form-edit" action="../backend/edit/proses_edit_penerbit.php?id=<?php echo $id; ?>" method="post">
      <div class="mb-3">
        <label for="id" class="form-label">ID Penerbit</label>
        <input type="text" class="form-control" name="id" id="id" value="<?php echo $id; ?>" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Penerbit</label>
        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama; ?>" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="<?php echo $email; ?>" required>
      </div>
      <div class="mb-3">
        <label for="telp" class="form-label">Telpon</label>
        <input type="number" class="form-control" name="telp" id="telp" value="<?php echo $telp; ?>" required>
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" rows="3" required><?php echo $alamat; ?></textarea>
      </div>
      <div class="mb-3">
        <button id="submit" type="submit" class="btn btn-primary" onclick="editData()">Submit</button>
        <a class="btn btn-primary" href="../penerbit.php" role="button">Cancel</a>
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