<?php
	session_start();
	session_destroy();
	header('location:dangnhap_admin.php');
?>