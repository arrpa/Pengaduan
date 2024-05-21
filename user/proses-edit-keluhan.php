<?php

$nik = $_POST['nik'];
$tgl_aduan = $_POST['tgl_aduan'];
$isi_aduan = $_POST['isi_aduan'];
$lok_aduan = $_POST['lok_aduan'];

include'../koneksi.php';
$sql = "UPDATE aduan SET nik='$nik', tgl_aduan='$tgl_aduan', idi_aduan='$isi_aduan', lok_aduan='$lok_aduan' WHERE NIK='$nik'";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    header("Location:?url=keluhan");
} else {
    echo"<script>alert('Maaf data tidak tersimpan'); window.location.assign('?url=keluhan');</script>";
}

?>