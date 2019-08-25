<?php
session_start();
include ("koneksi.php");

$accounts = [
	'username' => 'administrator',
	'password' => '123456',
];

if(isset($_POST)){
	if($_POST['action'] == "login"){
		if($accounts['username'] == $_POST['username'] &&
			$accounts['password'] == $_POST['password']){

			$_SESSION['username'] = "administrator";
			header("Location: index.php");
		}else{
			header("Location: login.php");
		}
	}else{
		header("Location: login.php");
    }
}