<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <?php include('../../config/my_connection.php'); ?>
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
    
    <div class="container mt-5 mx-auto">

        <h3>DATA SISWA</h3>

        <br>

        <a href="siswa_tambah.php" class="btn btn-primary">Tambah</a>

        <table class="table table-hover mt-2 table-bordered text-center">
          <thead class="bg-primary text-white">
            <tr>
              <th>NO</th>
              <th>NAMA</th>
              <th>JENIS KELAMIN</th>
              <th>KELAS</th>
              <th>NILAI</th>
              <th>LULUS/TDK LULUS</th>
              <th>AKSI</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $no = 1;

              $sql = "SELECT * FROM data_siswa ORDER BY nama_siswa ASC";

              $query = $koneks->query($sql);

              while($hasil = $query->fetch_array()){
                $ids = $hasil["id_siswa"];
                $nama = $hasil["nama_siswa"];
                $gndr = $hasil["jenis_kelamin"];
                $kls = $hasil["kelas"];
                $nilai = $hasil["nilai_ujian"];
            ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?=$nama?></td>
              <td><?=$gndr?></td>
              <td><?=$kls?></td>
              <td><?=$nilai?></td>
              <td>
                <?php if($nilai > 70): ?>
                  <span class="text-primary">LULUS</span>
                <?php else: ?>
                  <span class="text-danger">GAGAL</span>
                <?php endif; ?>
              </td>
              <td>
                <a href="siswa_hapus_proses.php?id=<?=$ids?>" class="btn btn-light">&#10006;</a>
                <a href="siswa_update.php?id=<?=$ids?>" class="btn btn-light">&#9998;</a>
                <a href="#" class="btn btn-light">&#9776;</a>
              </td>
            </tr>

            <?php } ?>
          </tbody>
        </table>

    </div>

</body>
</html>
