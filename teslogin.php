<?php
session_start();
if (isset($_POST['Login'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];
    //periksa login
    if ($a == "AlipSth" && $b == "Karsochrris2") {
        //menciptakan session
        $_SESSION['Login'] = $a;
        //menuju ke halaman pemeriksaan session
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='raport2.php'>di sini</a>
                untuk menuju ke halaman selanjutnya";
    } else {
        die("username atau password anda salah 
        silahkan kembali login <a href=teslogin.php> Login </a>");
    }
} else {
    ?>
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
        <a class="navbar-brand" href="#">Login Dulu Gaesss</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
        </div>
    </nav>
    <!-- End Header -->

    <!-- Content -->
    <form action="raport2.php" method="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="padding:20px;">
                <div class="card badge-dark">
                    <div class="card-header" align="center">Login here...</div>
                    <div class="card-body">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="user" required class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="Password" name="pass" required class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-primary">
                                    Log In
                                </button>
                            </div>
                                
                            </form>
                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Footer -->
    <footer>
        <center>&copy; From Web Sederhana</center>
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
<?php
}
?>