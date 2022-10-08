<a href="<?php echo site_url('peminjaman/insert'); ?>" class="btn btn-primary">
    <i class="fa fa-plus"> Tambah</i>
</a>
<a href="<?php echo site_url('fakultas/data_export'); ?>" class="btn btn-outline-info" style="float: right;">
    <i class="fa fa-download"> Export Excel</i>
</a>
<br /><br />

<table class="table table-responsive">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Tanggal Pinjam</th>
            <th>Status Pengembalian</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_peminjaman as $peminjaman) : ?>
            <tr>
                <td><?php echo $peminjaman['id']; ?></td>
                <td><?php echo $peminjaman['nim']; ?></td>
                <td><?php echo $peminjaman['tanggal_pinjam']; ?></td>
                <td><?php echo number_format($peminjaman['status_pengembalian']); ?></td>
                <td>
                    <a href="<?php echo site_url('peminjaman/update/' . $peminjaman['id']); ?>" class="btn btn-secondary">
                        <i class="fa fa-edit"> Ubah</i>
                    </a>

                    <a href="<?php echo site_url('peminjaman/delete/' . $peminjaman['id']); ?>" class="btn btn-danger">
                        <i class="fa fa-trash-alt"> Hapus</i>
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>