<?php
ob_start();
session_start();
?>
<html>
<head>
	<title>Aplikasi Absensi</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #6380ff;">
	<center><h1>ABSENSI MAHASISWA</h1></center>
	<div class="box">
	<center><h2>Form Login</h2></center>
	<form action="login.php?op=in" method="POST"class="margin-bottom-0">
		<table border="0" cellpadding="4">
			<tr>
				<td width="80">Username</td>
				<td width="200"><input type="text" size="30" maxlength="32" name="id_user" required /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" size="30" maxlength="255" name="password" required /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>