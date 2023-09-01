<?php

$isi_laporan = $_POST['isi_laporan'];
$id = $_GET['id'];

//koneksi
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", "root", "");

//query update
$query = $koneksi->query("UPDATE `pengaduan` SET isi_laporan= `$isi_laporan` where id_pengaduan= '$id'");

header("location:pengaduan.php");

?>