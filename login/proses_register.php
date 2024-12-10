<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

$query = "INSERT INTO admin (username, password) VALUES ('$username', '$password')";
if (mysqli_query($koneksi, $query)) {
    header("Location: login.php?status=registered"); // Redirect ke login
} else {
    echo "Pendaftaran gagal: " . mysqli_error($koneksi);
}
?>
