<!DOCTYPE html>
<html lang="en">
<head>
    <script>
    window.print();
</script>
</head>
<body>
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
			</tr>
			<?php 
		}
		?>
	</table>
    <br><br>
</body>
</html>