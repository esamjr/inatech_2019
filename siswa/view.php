<?php
include ("../koneksi.php");
if(!isset($_GET['id'])):
header("location:../pendaftaran/index.php");
else:
$sqlSiswa = mysql_query("SELECT * FROM `siswa` WHERE `id` = '{$_GET['id']}
	'");

$sqlKelas = mysql_query("SELECT * FROM `kelas`");
$sqlJurusan = mysql_query("SELECT * FROM `jurusan`");
$rowSiswa = mysql_fetch_array($sqlSiswa);
?>
<form action="action.php" method="post">
<table width="500" border="0">
	<h1>Pendaftaran</h1>
	<tr>
			<td>Nama</td>
			<td>: <input type="text" 
						name="nama" 
						value="<?= $rowSiswa['nama']?>" 
						disabled /></td>
	</tr>
	
	<tr>
			<td>Kelas</td>
			<td>:
				<select name="kelas" disabled="1">
					<option value="">--- Pilih Kelas ---</option>
				<?php while ($rowKelas=mysql_fetch_array($sqlKelas)): ?>
					<option value="<?=$rowKelas['id'] ?>"
						<?= ($rowKelas['id'] == $rowSiswa['kelas_id']) ? "selected":"" ?>>
							<?= $rowKelas['nama'] ?>
					</option>
				<?php endwhile; ?>
				</select>
			</td>
	</tr>
	
	<tr>
			<td>Jurusan</td>
			<td>:
				<select name="jurusan" disabled="1">
					<option value="">--- Pilih Jurusan ---</option>
				<?php while ($rowJurusan=mysql_fetch_array($sqlJurusan)): ?>
					<option value="<?=$rowJurusan['id'] ?>"
						<?= ($rowJurusan['id'] == $rowSiswa['jurusan_id']) ? "selected":"" ?>>
							<?= $rowJurusan['nama'] ?>
					</option>
				<?php endwhile; ?>
				</select>
	</tr>
	
	<tr>
			<td>Tanggal Lahir</td>
			<td>: <input type="date" 
				name="tanggal_lahir" 
				value="<?= $rowSiswa['tanggal_lahir']?>" 
				disabled
				 /></td>
	</tr>
		
	<tr>
			<td>Tempat Lahir</td>
			<td>: <input type="text" 
				name="tempat_lahir" 
				value="<?= $rowSiswa['tempat_lahir']?>" disabled /></td>
	</tr>
	<tr>
			<td colspan="2">
				<input type="hidden" name="action" value="create" />
				<input type="submit" value="Daftar" />
			</td>
	</tr>
</table>
</form>
<?php endif; ?>