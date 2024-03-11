<?php
ob_start();
session_start();
if(!isset($_SESSION['id_user'])){
    die("<b>Oops!</b> Access Failed.
		<p>Sistem Logout. Anda harus melakukan Login kembali.</p>
		<button type='button' onclick=location.href='./'>Back</button>");
}
if($_SESSION['level']!="dosen"){
    die("<b>Oops!</b> Access Failed.
		<p>Anda Bukan dosen.</p>
		<button type='button' onclick=location.href='./'>Back</button>");
}
	include "koneksi.php";
?>
<html>
<head>
	<title>Absensi</title>
	<link rel="stylesheet" href="style2.css">
</head>
<body style="background-color:  #6380ff;">
	
	<?php
		$tampilPeg	=mysqli_query($conn, "SELECT * FROM user WHERE id_user='$_SESSION[id_user]'");
		$peg	=mysqli_fetch_array($tampilPeg);
	?>
	<center><h1>ABSENSI MAHASISWA</h1></center>
<div class="halamandosen">
	<h2>Welcome <?=$peg['id_user']?></h2>
	<a href="print.php" target="_BLANK"><button class="button">Export to PDF</button></a>
	<br>
	<form method="post" action="excel.php"> 

        <input type="submit" name="export" value="Export to excel" class="button"> 

    </form>
    <table border="1" class="tabel">
		<tr id="headtabel" bgcolor="#333">
			<th>NO</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Semester</th>
			<th>Tanggal</th>
			<th>Matkul</th>
			<th>Status</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($conn,"select * from mahasiswa,data_absen where mahasiswa.nama = data_absen.nama");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jurusan']; ?></td>
				<td><?php echo $d['semester']; ?></td>
				<td><?php echo $d['tanggal']; ?></td>
				<td><?php echo $d['matkul']; ?></td>
				<td><?php echo $d['status']; ?></td>
				<td>
					<a href="edit.php?id_absen=<?php echo $d['id_absen']; ?>"><button class="button">EDIT</button></a>
					<a href="proses-delete.php?id_absen=<?php echo $d['id_absen']; ?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data?')"><button class="button">HAPUS</button></a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<br>
    <a href="logout.php"><button class="buttonlogout">LOGOUT</button></a>
	</div>
</body>
</html>