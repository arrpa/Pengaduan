<h5>Halaman Data User</h5>
<a href="?url=tambah-user" class="btn btn-primary">Tambah User</a>
<hr>
<table class="table table-striped table_bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>Nama</td>
        <td>Password</td>
        <td>Edit</td>
        <td>Hapus</td>
    </tr>
    <?php
    include'../koneksi.php';
    $no = 1;
    $sql = "SELECT * FROM user ORDER BY id_user DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['sandi'] ?></td>
            <td>
                <a href="?url=edit-user&id_user=<?= $data['id_user'] ?>" class="btn btn-warning">EDIT</a>
            <td>
                <a onclick="return confirm('Apakah anda yakin ingin menghapus data?')" href="
                ?url=hapus-user&id_user=<?= $data['id_user'] ?>" class="btn btn-danger">HAPUS</a>
            </td>
        </tr>
    <?php } ?>
</table>