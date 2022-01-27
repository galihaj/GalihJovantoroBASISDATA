<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$berat = $_POST['berat'];
$alamat = $_POST['alamat'];
 if (!empty($nama) || !empty($berat) || !empty($alamat)) {
// menginput data ke database
mysqli_query($koneksi,"insert into jastip values('','$nama','$berat','$alamat')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>