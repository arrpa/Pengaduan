<?php

$nama = $_POST['nama'];
$sandi = $_POST['sandi'];

include'../koneksi.php';
$sql = "INSERT INTO user(nama, sandi) VALUES('$nama', '$sandi')";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header("Location:?url=user");
} else {
    echo"<script>alert('Maaf data tidak tersimpan'); window.location.assign('?url=user');</script>";
}

?>