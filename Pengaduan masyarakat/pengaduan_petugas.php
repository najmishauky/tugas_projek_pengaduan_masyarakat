<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
    
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> petugas</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><img src="icon 1.png" alt=""></h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="tampilan.php">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="pengaduan.php"> Pengaduan <link rel="stylesheet" href="pengaduan.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"> Tanggapan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="logout.php"> Logout</a>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
      <br>
      <br>
      <br>
      <br>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            
            <th scope="col"><center>isi laporan</center></th>
            <th scope="col"><center>Bukti Foto</center></th>
            <th scope="col" style="text-align: center;">Aksi</th>
            <th scope="col"><center>Status</center></th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          <?php foreach($data as $pengaduan){ ?>
          <tr>
            <td><center><?=$pengaduan['isi_laporan'] ?></center></td>
            <td><center><img src="foto/<?=$pengaduan['foto']?>"></center></td>
            <td><center><input type="button" value="Detail" class="button">
            <a href="edit_laporan.php"><input type="button" value="Edit" class="button"></a>
            <a href="proses_hapus.php?id=<?= $pengaduan['id_pengaduan'] ?>"><input type="button" value="Hapus" class="button"></a></center></td>
            <td><center><?=$pengaduan['status'] ?></center></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <div class="d-grid gap-2 d-md-block">
          <a href="isi_pengaduan.php" class="btn btn-success" type="button" a href="isi_pengaduan.php">Buat Pengaduan</a>
      </div>
    </div>
      <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
    </body>
</html>