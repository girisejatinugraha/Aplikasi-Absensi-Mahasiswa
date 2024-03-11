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
	<form method="post" action="proses-signup2.php">
		<table>
             <tr>
                <td><label for="nim">Nim</label></td>
                <td>
                    <select name="nim" id="nim">
                    <?php
                    include "koneksi.php";
                    $query=mysqli_query($conn,"select * from mahasiswa") or die (mysqli_error($conn));
                    while($data=mysqli_fetch_array($query)){
                        echo "<option value=$data[nim]> $data[nim] $data[nama]</option>";
                    }
                    ?>
                    </select>
                </td>
            </tr>
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
                    <select name="level" id="">
                        <option value="mahasiswa">Mahasiswa</option>
                        <option value="dosen">Dosen</option>
                        <option value="admin">Admin</option>
                    </select>
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