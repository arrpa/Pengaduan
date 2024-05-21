<?php
$id_user = $_GET['id_user'];
include'../koneksi.php';
$sql = "SELECT * FROM user WHERE id_user='$id_user'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>

<h5>Halaman Edit Petugas</h5>
<a href="?url=user" class="btn btn-primary">Kembali</a>
<hr>
<form method="post" action="?url=proses-edit-user&id_user=<?= $id_user; ?>">
    <div class="form-groub mb-2">
        <label>Nama</label>
        <input value="<?= $data['nama'] ?>" type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-groub mb-2">
        <label>Sandi</label>
        <input value="<?= $data['sandi'] ?>" type="text" name="sandi" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-warning">Kosongkan</button>
    </div>
</form>