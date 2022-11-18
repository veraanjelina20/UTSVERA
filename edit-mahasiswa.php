<!doctype HTML>
<html>
<head>
	<title>menampilkan hasil edit</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form action="proses-edit-mahasiswa.php" method="POST">
					<?php
					$id=$_GET['id'];
                       include "koneksi.php";
                       $tampil=$koneksi->query("select * from ruangan where id_ruangan='$id'");
                       $row=$tampil->fetch_assoc();
					?>
					<div class="form-group">
						<label for="id_ruangan">ID Ruangan</label>
						<input type="number" name="id_ruangan" value="<?php echo $row['id_baju']?>" class="form-control">
					</div>

	
	<div class="form-group">
		<label for="nama_ruangan">Nama Ruangan</label>
		<input type="text" name="nama_ruangan" value="<?php echo $row['nama_baju']?>" class="form-control">
	</div>

	<div class="form-group">
		<label for="jenis_ruangan">Jenis Ruangan</label>
	<input type="text" name="jenis_ruangan" value="<?php echo $row['harga']?>"class="form-control">
	</div>

	<div class="form-group">
		<label for="jumlah_kursi">Jumlah Kursi</label>
		<input type="number" name="jumlah_kursi" value="<?php echo $row['bahan']?>" class="form-control">
	</div>

	<div class="form-group">
		<label for="jumlah_meja">Jumlah Meja</label>
		<input type="number" name="jumlah_meja" value="<?php echo $row['tanggal_masuk']?>" class="form-control">
	</div>

	<div class="form-group">
		<label for="lantai">Lantai</label>
		<input type="number" name="lantai" value="<?php echo $row['ukuran']?>" class="form-control">
	</div>

	<div class="form-group">
		<label for="luas">Luas</label>
		<input type="text" name="luas" value="<?php echo $row['warna']?>" class="form-control">
	</div>



<input type="submit" name="kirim" value="ubah" class="btn btn-info">
<input type="reset" name="kirim" value="kosongkan" class="btn btn-danger">
</form>

<script src="bootstrap/js/jQuery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</div>
</div>
</div>
</body>
</html>