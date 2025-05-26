<?php
include "auth.php";
include "config.php";
$data = mysqli_query($conn, "SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <style>
        body { font-family: sans-serif; background: #f8f9fa; padding: 40px; }
        h2 { text-align: center; }
        a { text-decoration: none; padding: 8px 12px; background: #28a745; color: white; border-radius: 5px; margin-right: 10px; }
        table { width: 100%; border-collapse: collapse; background: white; margin-top: 20px; }
        th, td { padding: 12px; border: 1px solid #ddd; text-align: center; }
        th { background: #007bff; color: white; }
        td a { background: #ffc107; color: black; padding: 5px 10px; border-radius: 4px; }
        td a.delete { background: #dc3545; color: white; }
        .top-bar { display: flex; justify-content: space-between; align-items: center; }
    </style>
</head>
<body>
    <div class="top-bar">
        <h2>Data Siswa</h2>
        <div>
            <a href="tambah.php">Tambah Data</a>
            <a href="logout.php" style="background: #dc3545;">Logout</a>
        </div>
    </div>

    <table>
        <tr>
            <th>No</th><th>Nama</th><th>NIS</th><th>Jurusan</th><th>Aksi</th>
        </tr>
        <?php $no = 1; while($row = mysqli_fetch_assoc($data)): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['nis'] ?></td>
            <td><?= $row['jurusan'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
                <a href="hapus.php?id=<?= $row['id'] ?>" class="delete" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
