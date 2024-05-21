<?php
$nik = $_GET['nik'];
include'../koneksi.php';
$sql = "SELECT * FROM aduan WHERE nik='$nik'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<h5>Halaman Edit Petugas</h5>
<a href="?url=keluhan" class="btn btn-primary">Kembali</a>
<hr>
<form method="post" action="?url=proses-edit-keluhan&nik=<?= $nik; ?>">
    <div class="form-groub mb-2">
        <label>NIK</label>
        <input value="<?= $data['nik'] ?>" type="number" name="nik" class="form-control" required>
    </div>
    <div class="form-groub mb-2">
        <label>Tanggal</label>
        <input value="<?= $data['tgl_aduan'] ?>" type="date" name="tgl_aduan" class="form-control" required>
    </div>
    <div class="form-groub mb-2">
        <label>Isi</label>
        <input value="<?= $data['isi_aduan'] ?>" type="text" name="isi_aduan" class="form-control" required>
    </div>
    <div class="form-groub mb-2">
        <label>Lokasi</label>
        <input value="<?= $data['lok_aduan'] ?>" type="text" name="lok_aduan" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-warning">Kosongkan</button>
    </div>
</form>