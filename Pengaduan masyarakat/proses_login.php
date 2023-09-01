<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", "root", "");

$query = $koneksi->query("select * from masyarakat where username='$username' AND password='$password'");

$jumlahBaris = $query->rowCount();

if($jumlahBaris > 0){

    $data = $query->fetch();

    $_SESSION['nik'] = $data['nik'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = 'masyarakat';

    header("location:tampilan.php");
}
else{
    $query = $koneksi->query("select * from petugas where username='$username' AND password='$password'");
    $jumlahBaris = $query->rowCount();

    if($jumlahBaris > 0){

        $data = $query->fetch();
        $_SESSION['id_petugas'] = $data['id_petugas'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data['level'];
    
        header("location:pengaduan_petugas.php");
   
}else{
    header("location:login.php");
 }

}

?>