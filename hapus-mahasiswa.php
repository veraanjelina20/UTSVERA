<?php

$id=$_GET['id'];

include "koneksi.php";

$hapus=$koneksi->query("delete from ruangan where id_ruangan='$id'");

if($hapus==true){

	header("location:tampil-mahasiswa2.php?pesan=hapusBerhasil");

} else{
	echo "Error";
}

?>