<?php

include "koneksi.php";


$id_ruangan=$_POST['id_ruangan'];
$nama_ruangan=$_POST['nama_ruangan'];
$jenis_ruangan=$_POST['jenis_ruangan'];
$jumlah_kursi=$_POST['jumlah_kursi'];
$jumlah_meja=$_POST['jumlah_meja'];
$lantai=$_POST['lantai'];
$luas=$_POST['luas'];


$ubah=$koneksi->query("update ruangan set id_ruangan='$id_ruangan', nama_ruangan='$nama_ruangan', jenis_ruangan='$jenis_ruangan', jumlah_kursi='$jumlah_kursi', jumlah_meja='$jumlah_meja', lantai='$lantai', luas='$luas' where id_ruangan='$id'");

if($ubah==true){

	header("location:tampil-mahasiswa2.php?pesan=editBerhasil");
} else{

	echo "error";
}

?>