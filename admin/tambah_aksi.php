<?php 
// koneksi database
include '../src/koneksi.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$role = $_POST['role'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into user values('','$username','$password','$nama','$nim','$alamat', '$role')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>