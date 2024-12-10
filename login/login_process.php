<?php
session_start();
include '../src/koneksi.php'; // Menghubungkan ke database

// Simulasi data pengguna (seharusnya diambil dari database)
$query = "SELECT username, password, role FROM user"; // Ganti dengan tabel yang sesuai
$result = mysqli_query($koneksi, $query);

$users = [];
while ($row = mysqli_fetch_assoc($result)) {
    $users[] = $row;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek kredensial pengguna
    foreach ($users as $user) {
        if ($user['username'] === $username && $user['password'] === $password) {
            // Set cookie untuk 1 hari (86400 detik)
            setcookie('username', $username, time() + (86400), "/"); // 1 hari
            setcookie('role', $user['role'], time() + (86400), "/"); // 1 hari

            // Redirect berdasarkan role
            if ($user['role'] === 'admin') {
                header('Location: ../admin/index.php');
            } else {
                header('Location: ../user/index.php');
            }
            exit();
        }
    }

    // Jika kredensial salah
    $_SESSION['error'] = "Username atau password salah!";
    header('Location: login.php');
    exit();
}
?>