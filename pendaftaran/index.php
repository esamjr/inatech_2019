<?php
	include("../koneksi.php");
	$sqlKelas = mysql_query("SELECT * FROM `kelas`");
	$sqlJurusan = mysql_query("SELECT * FROM `jurusan`");

?>
<form action="action.php" method="post">
<table width="500" border="0" bgcolor="lighblue" style="color: FullBlack;">
<body bgcolor="LightBlue"></body>
	<h1>Pendaftaran</h1>
	<tr>
			<td>Nama</td>
			<td>: <input type="text" name="nama" /></td>
	</tr>
	
	<tr>
			<td>Kelas</td>
			<td>:
				<select name="kelas">
					<option value="">--- Pilih Kelas ---</option>
				<?php while ($rowKelas=mysql_fetch_array($sqlKelas)): ?>
					<option value="<?=$rowKelas['id'] ?>">
							<?= $rowKelas['nama'] ?>
					</option>
				<?php endwhile; ?>
				</select>
			</td>
	</tr>
	
	<tr>
			<td>Jurusan</td>
			<td>:
				<select name="jurusan">
					<option value="">--- Pilih Jurusan ---</option>
				<?php while ($rowJurusan=mysql_fetch_array($sqlJurusan)): ?>
					<option value="<?=$rowJurusan['id'] ?>">
							<?= $rowJurusan['nama'] ?>
					</option>
				<?php endwhile; ?>
				</select>
	</tr>
	
	<tr>
			<td>Tanggal Lahir</td>
			<td>: <input type="date" name="tanggal_lahir" /></td>
	</tr>
		
	<tr>
			<td>Tempat Lahir</td>
			<td>: <input type="text" name="tempat_lahir" /></td>
	</tr>
	<tr>
			<td colspan="2">
				<input type="hidden" name="action" value="create" />
				<input type="submit" value="Daftar" />
			</td>
			<a href="../index.php">Kembali Ke Home</a>
	</tr>
</table>
</form>