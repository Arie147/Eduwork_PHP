<?php

include("../connection.php");

$id = $_GET["id"];

$query = mysqli_query($conn,"SELECT * FROM anggota WHERE id_anggota = $id");

foreach ($query as $data) {
  $nama = $data["nama"];
  $username = $data["username"];
  $password = $data["password"];
  $sex = $data["sex"];
  $telp = $data["telp"];
  $alamat = $data["alamat"];
  $email = $data["email"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Anggota</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Edit Anggota</h1>
    <form action="../backend/edit/proses_edit_anggota.php?id=<?php echo $data["id_anggota"]; ?>" method="post">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama; ?>" required>
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="username" value="<?php echo $username; ?>" required >
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" value="<?php echo $password; ?>" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Jenis Kelamin</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="L" 
            <?php if ($sex === "L") {
              echo "checked";
            } ?> 
          >
          <label class="form-check-label" for="laki-laki">
            L
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P" 
            <?php if ($sex === "P") {
              echo "checked";
            } ?>
          >
          <label class="form-check-label" for="perempuan">
            P
          </label>
        </div>
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
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="<?php echo $email; ?>" required>
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="../index.php" role="button">Cancel</a>
      </div>
    </form>
  </div>
</body>
</html>