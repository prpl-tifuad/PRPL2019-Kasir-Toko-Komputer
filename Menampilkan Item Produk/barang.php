<?php 
	include 'config.php';
	$sql = mysqli_query($konek, "SELECT * FROM barang");
 ?>

 <center>
 	<h2>Item Produk</h2>
 	<form method="get" action="cari_barang.php">
 	<input type="text" name="cari">
 	<input type="submit" name="submit" value="cari">
 	</form>
 	<table border="1">
 		<tr>
 			<th>Kode Barang</th>
 			<th>Nama Barang</th>
 			<th>Harga</th>
 			<th>Deskripsi</th>
 			<th>Aksi</th>
 		</tr>
 		<tr>
 			<?php 
 			foreach ($sql as $data) {
	 			echo "<td>$data[kode_barang]</td>";
	 			echo "<td>$data[nama_barang]</td>";
	 			echo "<td>$data[harga]</td>";
	 			echo "<td>$data[deskripsi]</td>";
	 			echo "<td><a href='delete.php?id=$data[kode_barang]'>Delete</a></td>";
	 			echo "</tr>";
 			}
 			 ?>
 		</tr>
 	</table>
 <a href="tambah.php"><button>Tambah</button></a>
 </center>