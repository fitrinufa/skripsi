<?php
	session_start();
	include '../include/config.php';

	$user = $_POST['username'];
	$pass = md5($_POST['password']);

	$r = $con->query("SELECT * FROM users WHERE username = '$user' AND password = '$pass'");
	if ($r -> num_rows > 0){
		while ($rr = $r->fetch_array()){
			$_SESSION['username'] = $rr['username'];
			$_SESSION['fullname'] = $rr['fullname'];
			$_SESSION['authorization'] = $rr['authorization'];
			$_SESSION['photo'] = $rr['photo'];
		}
		header("location:../index.php");
	}else{
		$_SESSION['error'] = "Kombinasi salah";
		header("location:../login.php");
	}
?>