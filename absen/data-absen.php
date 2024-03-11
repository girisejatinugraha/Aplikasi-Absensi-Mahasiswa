<?php
ob_start();
session_start();
if(!isset($_SESSION['id_user'])){
    die("<b>Oops!</b> Access Failed.
		<p>Sistem Logout. Anda harus melakukan Login kembali.</p>
		<button type='button' onclick=location.href='./'>Back</button>");
}
if($_SESSION['level']!="mahasiswa"){
    die("<b>Oops!</b> Access Failed.
		<p>Anda Bukan Pegawai.</p>
		<button type='button' onclick=location.href='./'>Back</button>");
}
	include "koneksi.php";
?>
<html>
<head>
	<title>Data Absen</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body style="background-color:  #6380ff;">
    
    <?php
        $nama=$_GET['nama'];
		$tampilPeg	=mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nama='$nama'");
		$peg	=mysqli_fetch_array($tampilPeg);
	?>

<center><h1>ABSENSI MAHASISWA</h1></center>
<div class="halaman">
<a href="tambah-absen.php?nama=<?php echo $peg['nama']; ?>">ISI ABSEN</a>
<br><br>
<table class="tabel">
            <tr id="headtabel" bgcolor="#333">
                <td>Nama</td>
                <td>tanggal</td>
                <td>matkul</td>
                <td>status</td>
            </tr>
            <?php
            include "koneksi.php";
            $nama=$_GET['nama'];
            $vData    =mysqli_query($conn, "SELECT * FROM data_absen WHERE nama='$nama'");
            while($vdat    =mysqli_fetch_array($vData)){    
            ?>
            <tr>
                <td><?php echo $vdat['nama']?></td>
                <td><?php echo $vdat['tanggal']?></td>
                <td><?php echo $vdat['matkul']?></td>
                <td><?php echo $vdat['status']?></td>
            </tr>
            <?php
            }
            
            
            ?>
        </table>
        <br><br>
    <a href="home-mahasiswa.php?nama=<?php echo $peg['nama']; ?>">KEMBALI</a>	
	<a href="logout.php">LOGOUT</a>
</div>    
</body>
</html>