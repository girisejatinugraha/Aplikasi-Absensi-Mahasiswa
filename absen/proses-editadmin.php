<?php 

include 'koneksi.php';

$id_user = $_POST['id_user'];
$password = $_POST['password'];
$level = $_POST['level'];

mysqli_query($conn, "UPDATE user set id_user='$id_user', password='$password', level='$level'");

echo "<script>alert('Data Berhasil Di Edit'); window.location='home-admin.php';</script>";