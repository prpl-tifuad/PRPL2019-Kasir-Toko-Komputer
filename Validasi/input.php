<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="contoh.css">


    <title>Input Data Transaksi</title>
  </head>
  <body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-danger">
      <div class="container">
        <a class="navbar-brand font-weight-bold text-white" href="input.php">Kom-Pute-r</a>
          <button class="navbar-toggler border border-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                  <a class="nav-item btn btn-light tombol text-danger" style="margin: 2px;" href="input.php">Input Data</a>
                  <a class="nav-item btn btn-light tombol text-danger" style="margin: 2px;" href="transaksi.php">Data Transaksi</a>
              </ul>
          </div>
      </div>
    </nav>

    <section class="bg-light">
      <div class="container">
        <?php 
          if(isset($_GET['pesan'])){
          $pesan = $_GET['pesan'];
          if($pesan == "datasaved"){ ?>
            <div class="row justify-content-center">
              <div class="col-md-7 mt-4 mb-2">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
                      Data Anda Berhasil di Masukkan
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php }
          else if ($pesan == "berhasilinput") { ?>
            <div class="row justify-content-center">
              <div class="col-md-7 mt-4 mb-2">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="alert alert-primary alert-dismissible fade show mt-3" role="alert">
                        Data Anda Berhasil di Masukkan
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } }?>
        <div class="row justify-content-center">
          <div class="col-md-7 info-panel mt-4 mb-4">
            <div class="row">
                <div class="col-lg-12">
                 <h3 class="text-center text-danger">Input Data</h3>
                 <p class="text-center pb-5 font-weight-normal">Isi data transaksi pelanggan <span class="text-danger font-weight-bold">dengan tanpa kesalahan</span></p>
                 <form method="POST" class="needs-validation" action="proses_input.php">
                  <div class="form-group">

                    <div class="col-auto">
                      <label class="sr-only" for="inlineFormInputGroup">ID Pelanggan</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="id" name="id" placeholder="Masukkan ID Pelanggan">
                      </div>
                    </div>

                    <div class="col-auto">
                      <label class="sr-only" for="inlineFormInputGroup">Nama Pelanggan</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Pelanggan">
                      </div>
                    </div>

                    <div class="col-auto">
                      <label class="sr-only" for="inlineFormInputGroup">Nomor HP</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukkan Nomor HP">
                      </div>
                    </div>

                    <div class="col-auto">
                      <label class="sr-only" for="inlineFormInputGroup">Alamat</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                      </div>
                    </div>

                    <div class="col-auto">
                      <label class="sr-only" for="inlineFormInputGroup">Kode Barang</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Masukkan Kode Barang">
                      </div>
                    </div>

                    <div class="col-auto">
                      <label class="sr-only" for="inlineFormInputGroup">Banyak Barang</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="banyak" name="banyak" placeholder="Masukkan Banyak Barang">
                      </div>
                    </div>

                    <div class="col-auto">
                      <label class="sr-only" for="inlineFormInputGroup">Bayar</label>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="bayar" name="bayar" placeholder="Masukkan Pembayaran">
                      </div>
                    </div>

                    <div class="col-auto">
                      <div class="input-group">
                        <input type="submit" class="btn btn-info col-12 mt-2 btn-md" name="submit" value="Masukkan Data">
                        <input type="reset" class="btn btn-danger col-12 mt-2 btn-md" name="reset" value="Reset Data">
                      </div>
                    </div>

                    
                 </form>
                </div>
          </div>
        </div>
        <!-- <div class="col-lg-4 warning mt-4 mb-4 pt-2 information">
            <div class="row">
              <div class="col-lg rounded">
                <div class=" mb-3">
                      <div class="card-body text-center">
                        <h3 class="text-danger">Perhatian</h3>
                          <p class="text-muted">Isi data dengan teliti untuk menghindari kesalahan input !!</p>
                      </div>
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg rounded">
                <div class="mb-3">
                      <div class="card-body">
                      </div>
                  </div>
              </div>
            </div>
          </div> -->
      </div>
    </div>  
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>