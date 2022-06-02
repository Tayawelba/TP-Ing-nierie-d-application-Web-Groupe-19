<?php
	session_start();
	$_SESSION['connexion'] = false;
	header('location:index.php');
?>