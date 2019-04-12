<?php 
include 'config.php';
$cari = $_GET['cari'];
$sql = mysqli_query($konek, "SELECT * FROM barang where kode_barang like '$cari' or nama_barang like '$cari' or harga like '$cari' or deskripsi like '$cari'");
echo "<center>Keyword : $cari";
?>


	<table border="1">
 	<tr>
 		<th>Kode Barang</th>
 		<th>Nama Barang</th>
 		<th>Harga</th>
 		<th>Deskripsi</th>
 		<th>Action</th>
 	</tr>
 	<tr>
 		<?php 
 		foreach ($sql as $data) {
 			echo "<td>$data[kode_barang]</td>";
 			echo "<td>$data[nama_barang]</td>";
 			echo "<td>$data[harga]</td>";
 			echo "<td>$data[deskripsi]</td>";
 			echo "<td><a href='delete.php?id=$data[kode_barang]'>Delete</a>";
 			echo "</tr>";
 		}
 		 ?>
 	</tr>
</table>
<p></p>
<a href="barang.php"><button>Kembali</button></a></center>