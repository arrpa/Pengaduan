<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Website Pengaduan Masyarakat Samarinda.</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-md-4">
            <h4 class="text-center">APLIKASI PENGADUAN DAN KELUHAN</h4>
            <div class="card">
                <div class="card-header text-center">
                    <!-- <img src="logo-spp.png" width="100%"> -->
                    <h6>LOGIN SEBAGAI MASYARAKAT</h6>
                </div>
                <div class="card-body">
                    <form action="proses-login-warga.php" method="post">
                        <div class="form-group mb-2">
                            <label>Username</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukan Username anda.." required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Password</label>
                            <input type="password" name="sandi" class="form-control" placeholder="Masukan sandi anda.." required>
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-primary"> LOGIN </button>
                        </div>
                        <a href="index2.php"> Login Sebagai Administrator / Petugas </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
    

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>