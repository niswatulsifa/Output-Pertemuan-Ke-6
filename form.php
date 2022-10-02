<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Menambah Mahasiswa</title>
	<style type="text/css">
		body {
			background-image: url(pict/bg.jpg);
			text-align: center;
			font-family: monospace;
			font-size: 15pt;
		}
		img {
			width: 15%;
			height: 15%;
		}
	</style>
</head>
<body>
	<h1>Form Mahasiswa</h1>
	<form method="post" action="action.php">
		<p>Id Mahasiswa : <input type="text" name="id_mhs"></p>
		<p>Id Prodi : <input type="text" name="id_prodi"></p>
		<p>Nama Mahasiswa : <input type="text" name="nama_mhs"></p>
		<p>Alamat Mahasiswa : <input type="text" name="alamat_mhs"></p>
		<button type="Submit">Kirim</button>
	</form>
</body>
</html>