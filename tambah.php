<?php
include "auth.php";
include "config.php";

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $jurusan = $_POST['jurusan'];

    mysqli_query($conn, "INSERT INTO siswa (nama, nis, jurusan) VALUES ('$nama','$nis','$jurusan')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <style>
        body { font-family: sans-serif; background: #f0f2f5; padding: 40px; }
        form { max-width: 400px; margin: auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        input { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; }
        button { background: #28a745; color: white; padding: 10px; border: none; border-radius: 5px; width: 100%; }
    </style>
</head>
<body>
    <form method="POST">
        <h2 style="text-align:center;">Tambah Siswa</h2>
        <input type="text" name="nama" placeholder="Nama Lengkap" required>
        <input type="text" name="nis" placeholder="NIS" required>
        <input type="text" name="jurusan" placeholder="Jurusan" required>
        <button name="simpan">Simpan</button>
    </form>
</body>
</html>
