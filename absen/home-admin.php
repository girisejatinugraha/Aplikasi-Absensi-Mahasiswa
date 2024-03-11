<?php
ob_start();
session_start();
if(!isset($_SESSION['id_user'])){
    die("<b>Oops!</b> Access Failed.
		<p>Sistem Logout. Anda harus melakukan Login kembali.</p>
		<button type='button' onclick=location.href='./'>Back</button>");
}
if($_SESSION['level']!="admin"){
    die("<b>Oops!</b> Access Failed.
		<p>Anda Bukan Pegawai.</p>
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
	<br>
	<form action="home-admin.php" method="get">
		<label>Cari user :</label>
		<input type="text" name="cari">
		<input type="submit" value="Cari">
	</form>
	
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		echo "<b>Hasil pencarian : ".$cari."</b>";
	}
	?>
	<table border="1" class="tabel">
		<tr id="headtabel" bgcolor="#333">
			<th>NO</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
            <th>Opsi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			$data = mysqli_query($conn,"select * from user where id_user like '%".$cari."%'");				
		}else{
			$data = mysqli_query($conn,"select * from user");		
		}
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_user']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td><?php echo $d['level']; ?></td>
				<td>
					<a href="editadmin.php?id_user=<?php echo $d['id_user']; ?>">EDIT</a>
					<a href="proses-deleteadmin.php?id_user=<?php echo $d['id_user']; ?>" onclick="return confirm ('Apakah anda yakin ingin menghapus data?')">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<br><br>
	<a href="logout.php">LOGOUT</a>
</div>	
</body>
</html>