<?php
// Mulai session
session_start();

// Cek apakah pengguna sudah login dan memiliki role user
if (!isset($_COOKIE['username']) || $_COOKIE['role'] !== 'user') {
    header('Location: ../login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>user</title>
</head>
<body>
    
    <div class="user-container">
        <img src="profil7.jpg" alt="User Photo">
        <h2>MATCENZO</h2>
        <p>Email: matcenzo@gmail.com</p>
        <p>Bio: A passionate web developer and tech enthusiast.</p>
        <a href="../src/logout.php" class="button">kembali</a>
    </div>
</body>
</html>