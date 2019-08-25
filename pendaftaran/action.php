<?php
include ("../koneksi.php");
if (isset($_POST)) {
	if($_POST ['action'] == "create"){
		$sql = mysql_query("INSERT INTO `siswa` VALUES(NULL,'
		{$_POST['nama']}','
		{$_POST['kelas']}', '
		{$_POST['jurusan']}','
		{$_POST['tanggal_lahir']}', '
		{$_POST['tempat_lahir']}')");
	if ($sql) {
				header("Location: index.php");
			  }
	}else{
		header("Location: index.php");
	}
}