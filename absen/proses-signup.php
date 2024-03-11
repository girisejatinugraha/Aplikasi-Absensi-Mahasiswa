<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$semester = $_POST['semester'];
 
// menginput data ke database
$query="insert into mahasiswa values('$nim','$nama','$jurusan','$semester')"; 
// mengalihkan halaman kembali ke index.php
if (mysqli_query($conn, $query)) {
	?>
	<script language="JavaScript">
		alert('data berhasil disimpan');
		document.location='../index.php';
	</script>
	<?php
}else{
?>
<script language="JavaScript">
alert('Nim sudah terdaftar');
document.location='signup.php';
</script>
<?php
}
 
?>