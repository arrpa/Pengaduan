<h5>Halaman Pengaduan</h5>
<a href="?url=tambah-keluhan" class="btn btn-primary">Isi keluhan</a>
<hr>
<table class="table table-striped table_bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>NIK</td>
        <td>Tanggal</td>
        <td>Isi keluhan</td>
        <td>Lokasi</td>
        <td>Edit</td>
        <td>Hapus</td>
    </tr>
    <?php
    include'../koneksi.php';
    $no = 1;
    $sql = "SELECT * FROM aduan ORDER BY nik DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nik'] ?></td>
            <td><?= $data['tgl_aduan'] ?></td>
            <td><?= $data['isi_aduan'] ?></td>
            <td><?= $data['lok_aduan'] ?></td>
            <td>
                <a href="?url=edit-keluhan&nik=<?= $data['nik'] ?>" class="btn btn-warning">EDIT</a>
            </td>
            <td>
                <a onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="
                ?url=hapus-keluhan&nik=<?= $data['nik'] ?>" class="btn btn-danger">HAPUS</a>
            </td>
        </tr>
    <?php } ?>
</table>