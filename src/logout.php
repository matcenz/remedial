<?php
// Mulai session
session_start();

// Hapus cookie dengan mengatur masa berlakunya ke waktu yang sudah berlalu
if (isset($_COOKIE['username'])) {
    setcookie('username', '', time() - 3600, "/"); // Hapus cookie username
}

if (isset($_COOKIE['role'])) {
    setcookie('role', '', time() - 3600, "/"); // Hapus cookie role
}

// Hapus session
session_destroy();

// Redirect ke halaman login
header('Location: ../index.php');
exit();
?>