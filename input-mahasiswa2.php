<!doctype HTML>
<html>
<head>
	<title>menampilkan hasil input form</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="proses-input-mahasiswa.php" method="POST">
					<div class="form-group">
						<label for="nim">ID Ruangan</label>
						<input type="number" name="nim" class="form-control">
					</div>

	
	<div class="form-group">
		<label for="nama_ruangan">Nama Ruangan</label>
		<input type="text" name="nama_ruangan" class="form-control">
	</div>

	<div class="form-group">
		<label for="jenis_ruangan">Jenis Ruangan</label>
	<input type="text" name="jenis_ruangan" class="form-control">
	</div>

	<div class="form-group">
		<label for="jumlah_kursi">Jumlah Kursi</label>
	<input type="number" name="jumlah_kursi" class="form-control">
	</div>

	<div class="form-group">
		<label for="jumlah_meja">Jumlah Meja</label>
	<input type="number" name="jumlah_meja" class="form-control">
	</div>

	<div class="form-group">
		<label for="lantai">Lantai</label>
	<input type="number" name="lantai" class="form-control">
	</div>

	<div class="form-group">
		<label for="luas">luas</label>
	<input type="text" name="luas" class="form-control">
	</div>

	

<input type="submit" name="kirim" value="simpan" class="btn btn-info">
<input type="reset" name="kirim" value="kosongkan" class="btn btn-danger">
</form>

<script src="bootstrap/js/jQuery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</div>
</div>
</div>
</body>
</html>