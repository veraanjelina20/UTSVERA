<?php
$id_ruangan=$_POST['id_ruangan'];
$nama_ruangan=$_POST['nama_ruangan'];
$jenis_ruangan=$_POST['jenis_ruangan'];
$jumlah_kursi=$_POST['jumlah_kursi'];
$jumlah_meja=$_POST['jumlah_meja'];
$lantai=$_POST['lantai'];
$luas=$_POST['luas'];



include "koneksi.php";

$simpan=$koneksi->query("insert into ruangan(id_ruangan,nama_ruangan,jenis_ruangan,jumlah_kursi,jumlah_meja,lantai,luas) 
	                     values ('$id_ruangan', '$nama_ruangan', '$jenis_ruangan', '$jumlah_kursi', '$jumlah_meja', '$lantai', '$luas')");

if($simpan==true){

	header("location:tampil-mahasiswa2.php?pesan=inputBerhasil");
} else{
	echo "Error";
}

?>