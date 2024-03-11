<?php
ob_start();
session_start();
if(!isset($_SESSION['id_user'])){
    die("<b>Oops!</b> Access Failed.
		<p>Sistem Logout. Anda harus melakukan Login kembali.</p>
		<button type='button' onclick=location.href='./'>Back</button>");
}
if($_SESSION['level']!="mahasiswa"){
    die("<b>Oops!</b> Access Failed.
		<p>Anda Bukan Pegawai.</p>
		<button type='button' onclick=location.href='./'>Back</button>");
}
	include "koneksi.php";
?>
<html>
<head>
	<title>Aplikasi Absen</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body style="background-color:  #6380ff;">
	<?php
		$tampilPeg	=mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim='$_SESSION[nim]'");
		$peg	=mysqli_fetch_array($tampilPeg);
	?>
	<?php
	$tgl=date('d-m-Y');
	?>
<center><h1>ABSENSI MAHASISWA</h1></center>
<div class="halaman">	
	<center><h3>selamat datang <b><?=$peg['nama']?></b>, silahkan mengisi absen tanggal 	<?php echo $tgl;?> </h3></center>
	<br><br>
	<a href="data-absen.php?nama=<?php echo $peg['nama']; ?>">LIHAT ABSEN</a>
	<br><br>
	<table>
		<tr>
			<td>Nim :</td>
			<td><?=$peg['nim']?></td>
		</tr>
		<tr>
			<td>Nama :</td>
			<td><?=$peg['nama']?></td>
		</tr>
		<tr>
			<td>Jurusan :</td>
			<td><?=$peg['jurusan']?></td>
		</tr>
		<tr>
			<td>Semester :</td>
			<td><?=$peg['semester']?></td>
		</tr>
	</table>
	<br><br>
	<a href="logout.php">LOGOUT</a>
</div>	

</body>
</html>