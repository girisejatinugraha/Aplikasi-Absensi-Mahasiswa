<?php 
include 'koneksi.php';
$id_user = $_GET['id_user'];
 
$query="DELETE FROM user WHERE id_user='$id_user'";
 
if (mysqli_query($conn, $query)) {
    ?>
    <script language="JavaScript">
        alert('data berhasil dihapus');
        document.location='home-admin.php';
    </script>
    <?php
}else{
?>
<script language="JavaScript">
alert('data gagal dihapus');
document.location='home-admin.php';
</script>
<?php
}
?>