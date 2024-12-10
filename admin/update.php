<?php 
// koneksi database
include '../src/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$role = $_POST['role'];

// update data ke database
mysqli_query($koneksi,"update user set username='$username', password='$password', nama='$nama', nim='$nim', alamat='$alamat', role='$role' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>