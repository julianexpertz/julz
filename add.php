<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h2>Tambah Artikel<h2>
	<p><a href="admin.php">Halaman Awal</a></p>
	<form action="addproses.php" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td><input type="file" name="gambar" placeholder="Image"></td>
			</tr>
			<tr>
				<td><input type="text" name="title" placeholder="Judul"></td>
			</tr>
			<tr>
				<td><textarea type="text" name="content" placeholder="Konten"></textarea></td>
			</tr>
			<tr>
				<td align="center"><input type="submit" value="Submit"></td>
			</tr>
		</table>
</body>
</html>