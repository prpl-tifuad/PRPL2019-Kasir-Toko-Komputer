<?php 
include "config.php";
$id = $_POST['id'];
$kode_beli = $_POST['kode_beli'];
$kode_barang = $_POST['kode_barang'];
$banyak = $_POST['banyak'];
$bayar = $_POST['bayar'];
$tgl = date("Y-m-d");

mysqli_query($konek, "INSERT INTO transaksi (kode_beli, id, kode_barang, banyak, bayar) VALUES ('$kode_beli', '$id', '$kode_barang', '$banyak', '$bayar')");
echo "<a href='transaksi.php'>Lihat Data</a>";

?>