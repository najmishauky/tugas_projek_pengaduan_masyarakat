<?php

$_isi = $_POST['isi_laporan'];


//file foto
$nama_foto = $_FILES['foto']['name'];
$asal_foto = $_FILES['foto']['tmp_name'];

//koneksi database
$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", "root", "");

$_tanggal = date("Y-m-d");
//query Insert
$koneksi->query("INSERT INTO pengaduan values('','$_tanggal', '001', '$_isi', '$nama_foto', '0')");

move_uploaded_file($asal_foto, "foto/$nama_foto");

header("location:pengaduan.php");
