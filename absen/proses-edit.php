<?php 
 
include 'koneksi.php';
$id_absen = $_POST['id_absen'];
$tanggal = $_POST['tanggal'];
$matkul = $_POST['matkul'];
$status = $_POST['status'];
 
$query="UPDATE data_absen SET tanggal='$tanggal', matkul='$matkul', status='$status' WHERE id_absen='$id_absen'";
 
if (mysqli_query($conn, $query)) {
    ?>
    <script language="JavaScript">
        alert('data berhasil diupdate');
        document.location='home-dosen.php';
    </script>
    <?php
}else{
?>
<script language="JavaScript">
alert('data gagal diupdate');
document.location='home-dosen.php';
</script>
<?php
}
?>