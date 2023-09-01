<?php
session_start();

if(!isset($_SESSION['nik'])){
  header("location:login.php");
}

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", "root", "");
$nik = $_SESSION['nik'];

echo $nik;
$query = $koneksi->query("select * from pengaduan where nik='$nik' ");
$data = $query->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap-5.3.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="tampilan.css">
</head>
<body>
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Pengaduan Masyarakat</a>
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
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="login.php"><button type="button" class="btn btn-outline-success">login</button></a>
  </div>
  <script src="bootstrap-5.3.1-dist/js/bootstrap.min.js"></script>
</body>
</html>