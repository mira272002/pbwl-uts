<?php
error_reporting(0);
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "admin"){
	$_SESSION['username'] = $username;
    header("Location:header.php");
}
else{
	header("Location:login.php");
	("Username atau Password anda Salah !");
}

?>