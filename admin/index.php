<?php
// Mulai session
session_start();

// Cek apakah pengguna sudah login dan memiliki role admin
if (!isset($_COOKIE['username']) || $_COOKIE['role'] !== 'admin') {
    header('Location: ../login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP dan MySQLi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Selamat Datang Dihalaman admin</h2>
        <div class="text-end mb-3">
            <a href="tambah.php" class="btn btn-primary">+ Tambah Mahasiswa</a>
             <a href="../src/logout.php" class="btn btn-primary">- keluar</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark text-center">
                    <tr>
                        <th>No</th>
                        <th>username</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Alamat</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include '../src/koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM user");
                    while ($d = mysqli_fetch_array($data)) {
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $no++; ?></td>
                            <td><?php echo htmlspecialchars($d['username']); ?></td>
                            <td><?php echo htmlspecialchars($d['nama']); ?></td>
                            <td><?php echo htmlspecialchars($d['nim']); ?></td>
                            <td><?php echo htmlspecialchars($d['alamat']); ?></td>
                            <td class="text-center">
                                <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
