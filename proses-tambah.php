<?php
session_start();
include "koneksi.php";
?>
<?php

$id_pelanggan=$_POST['id_pelanggan'];
$kode_barang=$_POST['kode_barang'];
$nama_barang=$_POST['nama_barang'];
$stok_awal=$_POST['stok_awal'];
$barang_masuk=$_POST['barang_masuk'];
$barang_keluar=$_POST['barang_keluar'];
$stok_akhir=$_POST['stok_akhir'];

include "koneksi.php";

$simpan=$koneksi->query("insert into stok_barang (id_barang,kode_barang,nama_barang,stok_awal,barang_masuk,barang_keluar,stok_akhir)
						values('$id_barang', '$kode_barang', '$nama_barang', '$stok_awal', '$barang_masuk', '$barang_keluar', '$stok_akhir')");

if($simpan==true){

	header("location:tampil_laporan.php?pesan=inputberhasil");
} else{
	echo "Erorrr";
}

?>