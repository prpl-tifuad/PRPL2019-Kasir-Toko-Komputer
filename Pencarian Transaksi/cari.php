<?php 
include 'config.php';
$cari = $_GET['cari'];
$sql = mysqli_query($konek, "SELECT * FROM transaksi where kode_beli like '$cari' or id like '$cari' or kode_barang like '$cari' or banyak like '$cari'");
echo "<center>Keyword : $cari";
?>


	<table border="1">
 	<tr>
 		<th>Kode Beli</th>
 		<th>ID Pelanggan</th>
 		<th>Kode Barang</th>
 		<th>Jumlah</th>
 		<th>Action</th>
 	</tr>
 	<tr>
 		<?php 
 		foreach ($sql as $data) {
 			echo "<td>$data[kode_beli]</td>";
 			echo "<td>$data[id]</td>";
 			echo "<td>$data[kode_barang]</td>";
 			echo "<td>$data[banyak]</td>";
 			echo "<td><a href='delete.php?id=$data[id]'>Delete</a>";
 			echo "</tr>";
 		}
 		 ?>
 	</tr>
</table>
<p></p>
<a href="index.php"><button>Kembali</button></a></center>