<?php

$nik = $_GET['nik'];

include'../koneksi.php';
$sql = "DELETE FROM aduan WHERE nik='$nik'";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header("Location:?url=keluhan");
} else {
    echo"<script>alert('Maaf data tidak terhapus'); window.location.assign('?url=keluhan');</script>";
}

?>