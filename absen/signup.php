<!DOCTYPE html>
<html>
<head>
	<title>Absensi</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:  #6380ff;">
<center><h1>ABSENSI MAHASISWA</h1></center>
 <div class="box">
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<center><h3>SIGNUP</h3></center>
	<form method="post" action="proses-signup.php">
		<table>
			<tr>
                <td>Nim</td>			
				<td><input type="text" required name="nim" ></td>
			</tr>
			<tr>
                <td>Nama</td>
				<td><input type="text" required name="nama"></td>
			</tr>
            <tr>
                <td>Jurusan</td>
				<td><input type="text" required name="jurusan"></td>
			</tr>
            <tr>
                <td>Semester</td>
				<td><input type="text" required name="semester"></td>
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