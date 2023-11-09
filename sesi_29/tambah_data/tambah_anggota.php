<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Anggota</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
</head>
<body>
  <div class="container">
    <h1>Tambah Anggota</h1>
    <form id="form-add" action="../backend/tambah/proses_tambah_anggota.php" method="post">
      <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" required>
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" id="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" required>
      </div>
      <div class="mb-3">
        <label for="nama" class="form-label">Jenis Kelamin</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="L" checked>
          <label class="form-check-label" for="laki-laki">
            L
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="P">
          <label class="form-check-label" for="perempuan">
            P
          </label>
        </div>
      </div>
      <div class="mb-3">
        <label for="telp" class="form-label">Telpon</label>
        <input type="number" class="form-control" name="telp" id="telp" required>
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" id="alamat" rows="3" required></textarea>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" required>
      </div>
      <div class="mb-3">
        <button id="submit" type="submit" class="btn btn-primary" onclick="addData()">Submit</button>
        <a class="btn btn-primary" href="../index.php" role="button">Cancel</a>
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