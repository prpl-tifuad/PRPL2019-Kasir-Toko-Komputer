<?php 
	include 'config.php';
	$sql = mysqli_query($konek, "SELECT * FROM transaksi");
 ?>

 <center>
 	<h2>Transaksi</h2>
 <form method="get" action="cari.php">
 <input type="text" name="cari">
 <input type="submit" name="submit" value="cari">
 </form>
 <p></p>
 <table border="1">
 	<tr>
 		<th>Kode Beli</th>
 		<th>ID</th>
 		<th>Kode Barang</th>
 		<th>Banyak</th>
 		<th>Aksi</th>
 	</tr>
 	<tr>
 		<?php 
 		foreach ($sql as $data) {
 			echo "<td>$data[kode_beli]</td>";
 			echo "<td>$data[id]</td>";
 			echo "<td>$data[kode_barang]</td>";
 			echo "<td>$data[banyak]</td>";
 			echo "<td><a href='delete.php?id=$data[id]'>Delete</a></td>";
 			echo "</tr>";
 		}
 		 ?>
 	</tr>
 </table>
 <p></p>
 <a href="tambah.php"><button>Tambah</button></a>
 </center>