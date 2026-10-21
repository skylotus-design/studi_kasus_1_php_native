<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="homepage.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="siswa_data.php">Data Siswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
    
    <div class="container mt-5 mx-auto ">

        <div class="card col-4 mx-auto">

        <div class="card-header bg-primary text-white">Tambah Data Siswa</div>

        <div class="card-body">
            <form action="siswa_update_proses.php" method="POST">
                <div class="form-group mt-4">
                    <label for="">Nama Siswa</label>
                    <input type="text" name="nama" id="" class="form-control">
                </div>

                <div class="form-group mt-4">
                    <label for="">Jenis Kelamin</label> <br>
                    <input value="Laki-laki" class="form-check-input" type="radio" name="gender" id="l" checked> <label for="l">Laki-laki</label>
                    <input value="Perempuan" class="form-check-input" type="radio" name="gender" id="p"> <label for="p">Perempuan</label>
                </div>

                <div class="form-group mt-4">
                    <label for="">Kelas</label> <br>
                    <select name="kelas" id="" class="form-select">
                        <option value="12A" selected>12A</option>
                        <option value="12B">12B</option>
                        <option value="12C">12C</option>
                        <option value="12D">12D</option>
                    </select>
                </div>

                <div class="form-group mt-4">
                    <label for="">Nilai Ujian</label>
                    <input type="number" name="nilai" id="" class="form-control" min="0" max="100" value="70">
                </div>

                <div class="form-group mt-4">
                    <input type="submit" name="kirim" id="" class="form-control btn btn-primary" value="KIRIM">
                </div>
            </form>
        </div>

        </div>

    </div>

</body>
</html>