<h5>Halaman isi keluhan</h5>
<a href="?url=keluhan" class="btn btn-primary">Kembali</a>
<hr>
<form method="post" action="?url=proses-tambah-keluhan">
    <div class="form-groub mb-2">
        <label>NIK</label>
        <input type="number" name="nik" maxlength="16" class="form-control" required>
    </div>
    <div class="form-groub mb-2">
        <label>Tanggal</label>
        <input type="date" name="tgl_aduan" class="form-control" required>
    </div>
    <div class="form-groub mb-2">
        <label>Keluhan</label>
        <input type="text" name="isi_aduan" class="form-control" required>
    </div>
    <div class="form-groub mb-2">
        <label>Lokasi</label>
        <input type="text" name="lok_aduan" maxlength="30" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-warning">Kosongkan</button>
    </div>
</form>