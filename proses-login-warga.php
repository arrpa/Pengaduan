<?php

$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$sandi = $_POST['sandi'];

include 'koneksi.php';
$sql = "SELECT * FROM user WHERE nama='$nama' AND sandi='$sandi'";
$query = mysqli_query($koneksi, $sql);
if (mysqli_num_rows($query)>0) {
    session_start();
    $data = mysqli_fetch_array($query);
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['sandi'] = $data['sandi'];

    header('Location:user/user.php');
} else {
    echo"<script>
    alert('Maaf Anda Gagal Login, Silahkan Ulangi Lagi');
    window.Location.assign('index.php');
    </script>";
}
?>