<?php

$id_user = $_GET['id_user'];
$nama = $_POST['nama'];
$sandi = $_POST['sandi'];

include'../koneksi.php';
$sql = "UPDATE user SET nama='$nama', sandi='$sandi' WHERE id_user='$id_user'";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header("Location:?url=user");
} else {
    echo"<script>alert('Maaf data tidak tersimpan'); window.location.assign('?url=user');</script>";
}

?>