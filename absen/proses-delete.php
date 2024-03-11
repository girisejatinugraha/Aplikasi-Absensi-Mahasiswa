<?php 
include 'koneksi.php';
$id_absen = $_GET['id_absen'];
 
$query="DELETE FROM data_absen WHERE id_absen='$id_absen'";
 
if (mysqli_query($conn, $query)) {
    ?>
    <script language="JavaScript">
        alert('data berhasil dihapus');
        document.location='home-dosen.php';
    </script>
    <?php
}else{
?>
<script language="JavaScript">
alert('data gagal dihapus');
document.location='home-dosen.php';
</script>
<?php
}
?>