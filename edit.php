<?php
include "auth.php";
include "config.php";

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM siswa WHERE id=$id"));

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $jurusan = $_POST['jurusan'];

    mysqli_query($conn, "UPDATE siswa SET nama='$nama', nis='$nis', jurusan='$jurusan' WHERE id=$id");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <style>
        body { font-family: sans-serif; background: #f0f2f5; padding: 40px; }
        form { max-width: 400px; margin: auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        input { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; }
        button { background: #007bff; color: white; padding: 10px; border: none; border-radius: 5px; width: 100%; }
    </style>
</head>
<body>
    <form method="POST">
        <h2 style="text-align:center;">Edit Siswa</h2>
        <input type="text" name="nama" value="<?= $data['nama'] ?>" required>
        <input type="text" name="nis" value="<?= $data['nis'] ?>" required>
        <input type="text" name="jurusan" value="<?= $data['jurusan'] ?>" required>
        <button name="update">Update</button>
    </form>
</body>
</html>
