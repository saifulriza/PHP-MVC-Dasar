<html>
	<head>
		<title> Data Karyawan </title>
	</head>
	<style>
	</style>
	<body>
		<table cellpadding="20" border="1">
			<tr>
				<th>Nik</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
			</tr>
			<?php
				foreach($datahasil as $data){
					echo '<tr>';
					echo '<td>'.$data['nik'].'</td>';
					echo '<td>'.$data['nama'].'</td>';
					echo '<td>'.$data['alamat'].'</td>';
					echo '<td>'.$data['jenis_kelamin'].'</td>';
					echo '</tr>';
				}
			?>

		</table>
	</body>
