<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PTS</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <font style="font-family: kristen itc">
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Grosir Alipsth_</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logoutujian.php">Logout</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- End Header -->

    <!-- Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="padding:20px;">
                <div class="card badge-dark">
                    <div class="card-header">UjianPTS</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" required class="form-control">
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label><br>
                                <label>Laki-laki<input type="radio" name="jk" required value="Laki-Laki" class="form-control"></label>
                                <label>Perempuan<input type="radio" name="jk" required value="Perempuan" class="form-control"></label>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pembelian</label>
                                <input type="date" name="ttg" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Masukan Jumlah</label>
                                <input type="number" name="jumlah" required class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-primary">
                                    Simpan
                                </button>
                                    <button type="reset" name="reset" class="btn btn-primary">Reset
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8" style="padding:20px;">
                <div class="card">
                    <div class="card-header badge-danger">Pembelian</div>
                    <div class="card-body">
                        <form action="linkujianPTS.php" method="post">
                            <?php
                            if (isset($_POST['simpan'])) {
                                $nm = $_POST['nama'];
                                $almt = $_POST['alamat'];
                                $jk = $_POST['jk'];
                                $ttg = $_POST['ttg'];
                                $jml = $_POST['jumlah'];
                                $no = 1;
                                for ($a = 0; $a < $jml; $a++) {
                                    ?>
                                    <div class="card badge-primary">
                                        <div class="card-header badge-danger">Data ke - <?php echo $no++; ?></div>
                                        <div class="card-body">
                                            <div class="row" style="padding-bottom:20px;">
                                                <div class="col">
                                                    Nama Barang :   <select name="nama1[]">
                                                        <option  value="Roma" >Roma</option>     
                                                        <option value="Sprits">Sprits</option>
                                                        <option  value="Halu-Halu" >Halu-Halu</option>     
                                                        <option value="Martabak">Martabak</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" name="kode[]" placeholder="Kode" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    Jenis Barang :  <select name="jenis[]">
                                                        <option  value="Kue" >Kue</option>     
                                                        <option value="Minuman">Minuman</option>
                                                        <option  value="Es-krim" >Es-krim</option>     
                                                        <option value="Makanan">Makanan</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <input type="text"class="form-control" name="harga[]" placeholder="Harga">
                                                </div>
                                                <div class="col">
                                                    Jumlah Barang :<input type="text"class="form-control" name="barang[]" placeholder="Jumlah Barang">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                <?php
                                    }
                                    ?>
                                <div class="form-group">
                                    <input type="hidden" name="nama" value="<?php echo $nm; ?>">
                                    <input type="hidden" name="alamat" value="<?php echo $almt; ?>">
                                    <input type="hidden" name="jk" value="<?php echo $jk; ?>">
                                    <input type="hidden" name="ttg" value="<?php echo $ttg; ?>">
                                    <input type="hidden" name="jumlah" value="<?php echo $jml; ?>">
                                    <button class="btn btn-success btn-block" type="submit" name="save">Simpan</button>
                                </div>
                            <?php }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Footer -->
    <footer>
        <center>&copy; 2019 SMK Assalaam</center>
    </footer>
    <!-- End Footer -->

    <!-- JS -->
    <!-- Jquery, bebas.js -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- End JS -->
</body>

</html>