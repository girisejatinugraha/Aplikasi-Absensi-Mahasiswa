<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:  #6380ff;">

  <center><h1>Ganti password</h1></center>  
<div class="box">
	<br/>
	<a href="home-dosen.php">KEMBALI</a>
	<br/>
	<br/>

    <?php
        include 'koneksi.php';
        $id_user=$_GET['id_user'];
		$query	=mysqli_query($conn, "SELECT * FROM user WHERE id_user='$id_user'");
		$data	=mysqli_fetch_array($query);
	?>

	<h3>ABSEN MAHASISWA </h3>
	<form method="post" action="proses-editadmin.php">
		<table class="tabel">
			<tr>
                <td>username :</td>
				<td><?php echo $data['id_user']?></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="text" name="password" value="<?php echo $data['password']?>"></td>
			</tr>
            <tr>
				<td>Status</td>
				<td><select name="level" id="">
					<option value="">Pilih Level</option>
					<option value="dosen">Dosen</option>
					<option value="admin">Admin</option>
				</select></td>
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