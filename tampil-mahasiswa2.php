<!doctype html>
<html>
<head>
	<title>tabel ruangan</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
	<link href="bootstrap/plugins/datatable/style.css" rel="stylesheet">
</head>	
<body>
	<div class="container">
	<div class="row">
		<div class="col-md-12">
<h1> Tabel Ruangan</h1>
<?php

if(@$_GET['pesan']=="inputBerhasil"){
?>

<div class="alert alert-success">
	penyimpanan berhasil
</div>

<?php

}

?>


<?php

if(@$_GET['pesan']=="hapusBerhasil"){
?>

<div class="alert alert-success">
	data berhasil dihapus!
</div>

<?php

}

?>

<?php

if(@$_GET['pesan']=="editBerhasil"){
?>

<div class="alert alert-success">
	perubahan berhasil!
</div>

<?php

}

?>

	<table id="data-table" class="table table-bordered table-striped table-hover js-basic-example">
		<thead>
		<tr>
			<td>ID RUANGAN</td><td>NAMA RUANGAN</td><td>JENIS RUANGAN</td><td>JUMLAH KURSI</td>
			<td>JUMLAH MEJA</td><td>LANTAI</td><td>LUAS RUANGAN</td>
			<th>
                <a href="input-mahasiswa2.php">
                    <button class="btn btn-info glyphicon glyphicon-plus"> </button>

                </a>
			</th>
		</tr>
		</thead>
		<tbody>
		<?php

		include"koneksi.php";
$sql=$koneksi->query("select * from ruangan order by id_ruangan ASC");

while($row= $sql->fetch_assoc()){
	?>

	<tr>
			<td><?php echo $row['id_ruangan']?></td>
			<td><?php echo $row['nama_ruangan']?></td>
			<td><?php echo $row['jenis_ruangan']?></td>
			<td><?php echo $row['jumlah_kursi']?></td>
			<td><?php echo $row['jumlah_meja']?></td>
			<td><?php echo $row['lantai']?></td>
			<td><?php echo $row['luas']?></td>



			<td>

             <a href="edit-mahasiswa.php?id=<?php echo $row['id_ruangan']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"> </button>

                </a>

                 <a href="hapus-mahasiswa.php?id=<?php echo $row['id_ruangan']?>" onclick="return confirm('anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"> </button>

                </a>

			</td>
		</tr>

	<?php
	}
	?>
	</tbody>

	</table>
</div>
</div>
</div>

	<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/plugins/datatable/jquery.dataTables.js"></script>
<script src="bootstrap/plugins/datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="bootstrap/plugins/datatable/extensions/tables/jquery-datatable.js"></script>
	<script type="text/javascript">
		<$(document).ready(function(){
			$('#dataTables').DataTable();
		});
	</script>
	
</body>
</html>
