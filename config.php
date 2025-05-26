<?php
$conn = mysqli_connect("localhost", "root", "123", "crud_login");
if (!$conn) {
    die("Gagal terkoneksi: " . mysqli_connect_error());
}
?>
