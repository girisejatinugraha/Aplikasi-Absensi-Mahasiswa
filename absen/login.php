<?php
ob_start();
session_start();
	include "koneksi.php";
	$id_user		= mysqli_real_escape_string($conn, $_POST['id_user']);
	$password		= mysqli_real_escape_string($conn, $_POST['password']);
	$op 			= $_GET['op'];

	if($op=="in"){
		$sql = mysqli_query($conn, "SELECT * FROM user WHERE id_user='$id_user' AND password='$password'");
		if(mysqli_num_rows($sql)==1){
			$qry = mysqli_fetch_array($sql);
			$_SESSION['id_user']	= $qry['id_user'];
			$_SESSION['level']	= $qry['level'];
			$_SESSION['nim']	= $qry['nim'];
			
			if($qry['level']=="mahasiswa"){
				header("location:home-mahasiswa.php");
			}
			if($qry['level']=="dosen"){
				header("location:home-dosen.php");
			}
			if($qry['level']=="admin"){
				header("location:home-admin.php");
			}
		}
		else{
			?>
			<script language="JavaScript">
				alert('Oops! Login Failed. Username & password tidak sesuai ...');
				document.location='./';
			</script>
			<?php
		}
	}
	else if($op=="out"){
		unset($_SESSION['id_user']);
		unset($_SESSION['level']);
		header("location:./");
	}
?>