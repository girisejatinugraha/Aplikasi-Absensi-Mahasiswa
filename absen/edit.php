<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:  #6380ff;">

    <?php
        include 'koneksi.php';
        $id_absen=$_GET['id_absen'];
		$query	=mysqli_query($conn, "SELECT * FROM data_absen WHERE id_absen='$id_absen'");
		$data	=mysqli_fetch_array($query);
	?>

	<center><h3>ABSEN MAHASISWA </h3></center>
	<div class="box">
		<center><h3>form edit</h3></center>
	<a href="home-dosen.php">KEMBALI</a>
	<br><br>	
	<form method="post" action="proses-edit.php">
		<table>
			<tr>
                <td>Nama : </td>		
				<td>
                <input type="hidden" name="id_absen" value="<?php echo $data['id_absen']?>">
                <input type="hidden" name="nama" value="<?php echo $data['nama']?>">
                <?php echo $data['nama']?>
                </td>
			</tr>
			<tr>
                <td>Tanggal</td>
				<td><input type="date" name="tanggal" value="<?php echo $data['tanggal']?>"></td>
			</tr>
			<tr>
				<td>matkul</td>
				<td><input type="text" name="matkul" value="<?php echo $data['matkul']?>"></td>
			</tr>
            <tr>
				<td>Status</td>
				<td><input type="radio" id="html" name="status" value="hadir">
                <label for="html">Hadir</label><br>
                <input type="radio" id="html" name="status" value="izin">
                <label for="html">izin</label><br>
                <input type="radio" id="html" name="status" value="sakit">
                <label for="html">sakit</label><br></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
	</div>
</body>
</html>