<!DOCTYPE html>
<html>
<head>
	<title>Isi Absensi</title>
	<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:  #6380ff;">

    <?php
        include 'koneksi.php';
        $nama=$_GET['nama'];
        $tgl=date('d-m-Y');
		$tampilPeg	=mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nama='$nama'");
		$peg	=mysqli_fetch_array($tampilPeg);
	?>
	<center><h1>ABSENSI MAHASISWA</h1></center>
	<div class="box">
	<a href="data-absen.php?nama=<?php echo $peg['nama']; ?>">KEMBALI</a>	
	<h3>FORM ABSEN</h3>
	<form method="post" action="proses-tambah.php?nama=<?php echo $peg['nama']; ?>">
		<table>
			<tr>		
				<td width="80">Nama</td>	
				<td width="200"><input type="text" name="nama" value="<?php echo $peg['nama']?>" hidden></td>
			</tr>
			<tr>
                <td>Tanggal</td>
				<td><input type="date" name="tanggal" value="<?php echo $tgl?>"></td>
			</tr>
			<tr>
				<td>matkul</td>
				<td><input type="text" name="matkul"></td>
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