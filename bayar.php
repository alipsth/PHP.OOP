<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembayaran </title>
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
        </div>
    </nav>
    <!-- End Header -->

    <!-- Content -->
    <div class="container">
    	<div class="row">
    		<div class="col-md-12" style="padding:20px">
    			<div class="card">
    					<div class="card-header">Pembayaran</div>
    					<div class="card-body">
    					<div class="form-group">
    					<?php 
    					if (isset($_POST['simpan'])) {
    						$hasil=0;
    						$dis = $_POST['ds'];
    						$bayar=$_POST['byr'];
    						$hasil=$bayar-$dis;
    						
    					}?>
    					<div class="form-group">
    						<center><label><h1><?php echo "Terima Kasih Telah Datang Ke Toko Kami";?>
    						<h1></label></center>
    						<center><label><h1><?php echo "Total Kembalian :$hasil";?><h1></label></center><hr>
    						<center><label>Apakah anda ingin mengulang pembelian lagi</label><br>
    							<a href=ujianPTS.php><button class="btn btn-outline-danger my-2 my-sm-0" type="submit" 
    							name="simpan" >Ya</button></a>

    							<a href="loginujian.php"><button class="btn btn-outline-danger 
    								my-2 my-sm-0" type="submit" 
    								name="simpan">Tidak</button></a>
    						</center>
    					</div>	

    					</div>	
    					</div>
    			</div>
    		
    	</div>
    </div>

        <!-- End Content -->

    <!-- Footer -->
    <footer>
        <center>&copy; Alipsth_</center>
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