
<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_user = $_POST['id_user'];
$password = $_POST['password'];
$level = $_POST['level'];
 
// menginput data ke database
$query="insert into user values('$id_user','$password','$level',NULL)";
 
// mengalihkan halaman kembali ke index.php
if (mysqli_query($conn,$query)) {
	?>
	<script language="JavaScript">
		alert('data berhasil disimpan');
		document.location='../index.php';
	</script>
	<?php
}else{
?>
<script language="JavaScript">
alert('username sudah digunakan');
document.location='signup3.php';
</script>
<?php
}
 
?>