<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location: login.php");
}
?>

<a href="kelas/"><h3>Kelas</h3></a>
<a href="jurusan/"><h3>Jurusan</h3></a>
<a href="pendaftaran/"><h3>Pendaftaran</h3></a>
<a href="siswa/"><h3>Siswa</h3>
