<h5>Halaman Tambah User</h5>
<a href="?url=user" class="btn btn-primary">Kembali</a>
<hr>
<form method="post" action="?url=proses-tambah-user">
    <div class="form-groub mb-2">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="form-groub mb-2">
        <label>Sandi</label>
        <input type="text" name="sandi" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-warning">Kosongkan</button>
    </div>
</form>