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
                    <h6>LOGIN SEBAGAI PETUGAS/ADMIN</h6>
                </div>
                <div class="card-body">
                    <form action="proses-login-petugas.php" method="post">
                        <div class="form-group mb-2">
                            <label>username</label>
                            <input type="text" name="username" class="form-control" placeholder="Masukan Username anda.." required>
                        </div>
                        <div class="form-group mb-2">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukan Sandi anda.." required>
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-primary"> LOGIN </button>
                        </div>
                        <a href="index.php"> Login Sebagai Masyarakat </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
    

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>