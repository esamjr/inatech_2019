<table border="1">
	<tr>
		<td colspan="4">
			<h3>Siswa</h3>
		</td>
	</tr>
	<tr>
		<td><b>Nama</b></td>
		<td><b>Tempat Lahir</b></td>
		<td><b>Tanggal Lahir</b></td>
		<td>Action</td>
	</tr>
	<?php
	include ("../koneksi.php");
	$sql=mysql_query("SELECT * FROM `siswa`;
	");
	while($row=mysql_fetch_array($sql)): ?>
		<tr>
			<td><?= $row['nama'] ?></td>
			<td><?= $row['tempat_lahir'] ?></td>
			<td><?= $row['tanggal_lahir'] ?></td>
			<td>
				<a href='view.php?id=<?= $row['id'] ?>'>View</a>
			</td>
		</tr>
	<?php endwhile;?>
</table>