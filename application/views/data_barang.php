<!DOCTYPE html>
<html>
<head>
	<title>Data Barang</title>
</head>
<body>
	<table width="100%">
		<tr>
			<th>ID</th>
			<th>Nama Barang</th>
			<th>Jumlah</th>
			<th>Merek</th>
		</tr>
		<?php
			foreach ($data_barang as $key => $value) {
		?>
				<tr>
					<td><?=$value->Id; ?></td>
					<td><?=$value->nm_brg; ?></td>
					<td><?=$value->jml; ?></td>
					<td><?=$value->merk; ?></td>
				</tr>
		<?php
			}
		?>
	</table>
</body>
</html>