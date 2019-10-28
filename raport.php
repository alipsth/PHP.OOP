<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <title>Latihan 1</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  </head>
  <body>
    <font style="font-family: kristen itc">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">From ASSALAAM </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>

<div class="container">
  <div class="row" style="padding:20px;">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" >Formulir</div>
          <div class="card-body">
            <!--isi disini-->
                <form action="" method="post">
                  <div class="form-group">
                  <label for="" >Nama</label>
                  <input type="text" name="nama" class="form-control">
                  </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="alamat" class="form-control" rows="10">
                </textarea>
                </div>
                    <div class="form-group">
                        <button type="submit" name="simpan" class="btn btn-primary" >Simpan</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                        </div>
                </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </font>

                <!--end isi disini-->
   
   <div class="row">
    <div class="col-md-8">
        <center>
          <font style="font-family: kristen itc ">
            <h2>Biodata<h2>
        </center>
        <div class="table-responsive">
            <table class="table" align="center">
             <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
                            <?php
                    if(isset($_POST['simpan'])) {
                        $nama = $_POST['nama'];
                        $alamat = $_POST['alamat'];
                        
                    
                ?>
            <tr>
            <td>1</td>
            <td><?php if (isset($nama)) { echo $nama;} ?></td>
            <td><?php if (isset($alamat)) { echo $alamat;} ?></td>
            </tr>
    </table>
  <?php } ?>
</div>
    </div>
        </div>
        </font>
   
   
    <!-- Optional JavaScript -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    </body>
</html>
