<?php

$id = $_GET['id'];

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", "root", "");

$koneksi->query("delete from pengaduan where id_pengaduan='$id'");

header("location:pengaduan.php");