<?php 
// koneksi database
include 'koneksi.php';
$nama=$_GET['nama'];
$tampilPeg	=mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nama='$nama'");
$peg	=mysqli_fetch_array($tampilPeg);
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$matkul = $_POST['matkul'];
$status = $_POST['status'];
 
// menginput data ke database
$query="insert into data_absen values('','$nama','$tanggal','$matkul','$status')";
 
// mengalihkan halaman kembali ke index.php
if (mysqli_query($conn, $query)) {
            ?>
			<script language="JavaScript">
				alert('data berhasil disimpan');
				document.location='data-absen.php?nama=<?php echo $peg['nama']; ?>';
			</script>
			<?php
}else{
    ?>
    <script language="JavaScript">
        alert('data gagal disimpan');
        document.location='data-absen.php?nama=<?php echo $peg['nama']; ?>';
    </script>
    <?php
}
 
?>