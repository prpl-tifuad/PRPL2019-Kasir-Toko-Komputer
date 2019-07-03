<?php
$sql= $koneksi->query("SELECT * from tb_barang");
while ($tampil = $sql->fetch_assoc()) {
    $jumlah_barang = $sql->num_rows;
}
?>