<!DOCTYPE html>
<html>
<head>
	<title>Absensi</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:  #6380ff;">
<center><h1>SignUp</h1></center>
 <div class="box">
	<br/>
	<a href="../index.php">KEMBALI</a>
	<br/>
	<br/>
	<center><h3>SIGNUP</h3></center>
	<form method="post" action="proses-signup3.php">
		<table>
			<tr>
				<td>username</td>
				<td><input type="text" name="id_user"></td>
			</tr>
            <tr>
                <td>password</td>
				<td><input type="password" name="password"></td>
			</tr>
            <tr>
				<td>Level</td>
				<td>
                <input type="radio" id="mahasiswa" name="level" value="mahasiswa">
                <label for="mahasiswa">mahasiswa</label><br>
                <input type="radio" id="dosen" name="level" value="dosen">
                <label for="dosen">dosen</label><br>
                <input type="radio" id="admin" name="level" value="admin">
                <label for="admin">admin</label><br>
                </td>
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