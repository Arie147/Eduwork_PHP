<?php

include("../connection.php");

$id = $_GET["id"];

$query = mysqli_query($conn,"SELECT * FROM pengarang WHERE id_pengarang = '$id'");

foreach ($query as $data) {
  $id = $data["id_pengarang"];
  $nama = $data["nama_pengarang"];
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
  <title>Edit Pengarang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Edit Pengarang</h1>
    <form action="../backend/edit/proses_edit_pengarang.php?id=<?php echo $id; ?>" method="post">
      <div class="mb-3">
        <label for="id" class="form-label">ID Pengarang</label>
        <input type="text" class="form-control" name="id" id="id" value="<?php echo $id; ?>" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Nama Pengarang</label>
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
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="../pengarang.php" role="button">Cancel</a>
      </div>
    </form>
  </div>
</body>
</html>