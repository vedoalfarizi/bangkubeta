<!DOCTYPE html>
<html>
<head>
	<title>Bangku</title>
</head>
<body>
	<div>
		<form action="proses.php" method="POST">
			<label>Nama Kegiatan</label>
			<input type="text" name="n_keg"><br>
			<label>Deskripsi</label>
			<input type="text" name="desk"><br>
			<label>Kategori</label>
			<input type="checkbox" name="kat" value="fiksi">Fiksi
			<input type="checkbox" name="kat" value="nonfiksi">Non Fiksi
			<input type="checkbox" name="kat" value="nonfiksi">Lain-lain <br>	
			<label>Dilaksanakan pada</label>
			<input type="date" name="jadwal"><br>
			<input type="submit" name="kegiatan" value="Bagikan">
		</form>
	</div>
</body>
</html>