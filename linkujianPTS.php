<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <font style="font-family: kristen itc">
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Alipsth_</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="ujianPTS.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logoutujian.php">Logout</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
            </form>
        </div>
    </nav>
    <!-- End Header -->

    <!-- Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" style="padding:20px;">
                <div class="card badge-dark">
                    <div class="card-header">Latihan</div>
                    <div class="card-body">
                        <?php
                        if (isset($_POST['save'])) {
                            $nm = $_POST['nama'];
                            $almt = $_POST['alamat'];
                            $jk = $_POST['jk'];
                            $ttg = $_POST['ttg'];
                            $jml = $_POST['jumlah'];
                            $nama1 = $_POST['nama1'];
                            $kode = $_POST['kode'];
                            $jenis = $_POST['jenis'];
                            $harga = $_POST['harga'];
                            $jumlah = $_POST['barang'];
                        }
                        ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" readonly name="nama" class="form-control" value="<?php echo $nm; ?>">
                                <label>Alamat</label>
                                <input type="text" readonly name="alm" class="form-control" value="<?php echo $almt; ?>">
                                <label>Jenis Kelamin</label>
                                <input type="text" readonly name="jk" class="form-control" value="<?php echo $jk; ?>">
                                <label>Tanggal Pembelian</label>
                                <input type="text" readonly name="ttg" class="form-control" value="<?php echo $ttg; ?>">
                                <label>Jumlah </label>
                                <input type="text" readonly name="jumlah" class="form-control" value="<?php echo $jml; ?>">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9" style="padding:20px;">
                <div class="card badge-light">
                    <div class="card-body">
                        <div class="table-responsive">
                            <form action="bayar.php" method="POST">
                            <table class="table">
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Kode Barang</th>
                                    <th>Jenis Barang</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Total Harga</th>
                                </tr>

                                <?php
                                $subtotal=0;
                                for ($i = 0; $i < count($nama1); $i++) {
                                    // var_dump($n_akhir);
                                    $total=$harga[$i] * $jumlah[$i];

                                       $subtotal= $subtotal+$total;  
                                    ?>
                                    <tr>
                                        <td><?php echo $nama1[$i]; ?></td>
                                        <td><?php echo $kode[$i]; ?></td>
                                        <td><?php echo $jenis[$i]; ?></td>
                                        <td>Rp.<?php echo $harga[$i]; ?></td>
                                        <td><?php echo $jumlah[$i]; ?></td>
                                        <td>Rp.<?php echo $total; ?></td>
                                <?php } ?>
                                    </tr>

                                <?php 
                                if ($subtotal >= 150000) {
                                    $diskon = $subtotal * 0.5;
                                    $desc = "%5";
                                }if ($subtotal >= 250000) {
                                    $diskon = $subtotal * 0.10;
                                    $desc = "%10";
                                }if ($subtotal >= 500000) {
                                    $diskon = $subtotal * 0.20;
                                    $desc = "%20";
                                }else{
                                    $diskon=0;
                                    $desc="%0";
                                }
                                $dis = $subtotal - $diskon;
                                 ?>
                                
                                    <tr>
                                    <th>Sub Total</th>
                               
                                    <th>Diskon (<?php echo "$desc"; ?>)</th>
                                    <th>Total Pembayaran</th>
                                </tr>
                                 <tr>
                                    <td >Rp.<?php echo number_format($subtotal);?></td>
                                    <td >Rp.<?php echo number_format($diskon);?></td>
                                    <td >Rp.<?php echo number_format($dis);?></td>
                                 </tr>
                            </table>
                            <div class="form-group">
                                <input type="hidden" name="ds" value="<?php echo $dis; ?>">
                                <label>Masukan Jumlah</label>
                                <input type="number" name="byr" min="<?php echo $dis ?>"required class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-primary">
                                    Bayar                                    
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    

    <!-- End Content -->

    <!-- Footer -->
    <footer>
        <center>&copy; 2019 Web Ujian PTS</center>
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