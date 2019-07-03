<?php
$sql= $koneksi->query("SELECT * from tb_penjualan_detail");
while ($tampil = $sql->fetch_assoc()) {
    $jumlah = $sql->num_rows;
}
?>