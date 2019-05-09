<?php 
	include 'config.php';
	$sql = mysqli_query($konek, "SELECT * FROM transaksi");
 ?>
<!doctype html>
<html lang="en">
  	<head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom fonts for this template -->
	    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	    <!-- Custom styles for this template -->
	    <link href="css/agency.min.css" rel="stylesheet">

	    <!-- My CSS -->

	    <link rel="stylesheet" type="text/css" href="contoh.css">

	    <title>Data Transaksi</title>
  	</head>
<body>

    <!-- Navbar -->

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-danger">
    	<div class="container">
    		<a class="navbar-brand text-white font-weight-bold" href="index.php">Kom-Pute-r</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	        	<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav ml-auto">
			      	<a class="nav-item btn btn-light tombol text-danger" href="input.php">Input Data</a>
			    </ul>
			</div>
       	</div>
    </nav>

    <!-- End of NAvbar -->

    <!-- ============================================== -->

    <!-- Table Transaksi -->



    <!-- End of Table transaksi -->
	<section>
      	<div class="container">
        	<div class ="row mt-4 mb-4">
          		<div class="col-lg mt-4 mb-4"><br>
          			<h2 class="text-center mt-4 mb-4">Data Transaksi</h2><br><br>
          			<table class="col-5">
		            	<tr>
		            		<form action="search.php" method="post">
			            		<td><input type="text" name="cari" class="form-control col-12" placeholder="Masukkan Data Yang Ingin Dicari"></td>
			            		<td><input class="btn btn-success col-12" type="submit" name="submit" value="Cari"></td>
		            		</form>
		            	</tr>
		            </table>
          			<table class="table table-striped table-hover table-bordered rounded mt-3">
				    	<tr class="bg-info text-white">
				 			<th>Kode Beli</th>
				 			<th>ID Pelanggan</th>
				 			<th>Nama Pelanggan</th>
				 			<th>Nomor HP</th><!-- 
				 			<th>Alamat</th> -->
				 			<th>Kode Barang</th>
				 			<th>Nama Barang</th>
				 			<th>Banyak</th>
				 			<th>Bayar</th>
				 			<th>Tanggal Transaksi</th>
				 			<th>Aksi</th>
				 		</tr>
	 					<tr>
			 			<?php
				 			$sql = mysqli_query($konek, "SELECT transaksi.id as id_pelanggan, pelanggan.nama as nama_pelanggan, pelanggan.no_hp as no_hp_pelanggan, barang.nama_barang as nama_barang, transaksi.kode_barang as kode_barang, transaksi.kode_beli as kode_beli, transaksi.bayar as bayar, transaksi.tgl as tgl, transaksi.banyak as banyak FROM transaksi join barang on transaksi.kode_barang = barang.kode_barang join pelanggan on transaksi.id = pelanggan.id order by transaksi.tgl, transaksi.waktu desc ");

				 				foreach ($sql as $data) {
					 			echo "<td>$data[kode_beli]</td>";
					 			echo "<td>$data[id_pelanggan]</td>";
					 			echo "<td>$data[nama_pelanggan]</td>";
					 			echo "<td>$data[no_hp_pelanggan]</td>";
					 			// echo "<td>$data[alamat]</td>";
					 			echo "<td>$data[kode_barang]</td>";
					 			echo "<td>$data[nama_barang]</td>";
					 			echo "<td>$data[banyak]</td>";
					 			echo "<td>$data[bayar]</td>";
					 			echo "<td>$data[tgl]</td>";
					 			echo "<td><a href='delete.php?id=$data[kode_beli]'>Delete</a></td>";
					 			echo "</tr>";
				 			}
			 			 ?>
		 				</tr>
	 				</table>
	 				<a href="input_data.php"><button class="btn btn-danger mb-5">Input Data Pelanggan</button></a>
				</div>
          	</div>
        </div>
    </section>


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
 