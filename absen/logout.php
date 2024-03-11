<?php
session_start();
unset($_SESSION['id_user']);
unset($_SESSION['level']);
unset($_SESSION['nim']);
session_destroy();
	header("Location:../");
?>