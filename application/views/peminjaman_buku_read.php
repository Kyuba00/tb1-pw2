<a href="<?php echo site_url('peminjaman_buku/insert'); ?>" class="btn btn-primary">
    <i class="fa fa-plus"> Tambah</i>
</a>
<a href="<?php echo site_url('fakultas/data_export'); ?>" class="btn btn-outline-info" style="float:right">
    <i class="fa fa-download"> Export Excel</i>
</a>
<br /><br />

<table class="table table-responsive-sm">
    <thead class="thead-dark">
        <tr>
            <th>Tanggal Pinjam</th>
            <th>Judul</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_peminjaman_buku as $peminjaman_buku) : ?>
            <tr>
                <td><?php echo $peminjaman_buku['tanggal_pinjam']; ?></td>
                <td><?php echo $peminjaman_buku['judul']; ?></td>
                <td>
                    <a href="<?php echo site_url('peminjaman_buku/update/' . $peminjaman_buku['peminjaman_id']); ?>">
                        Ubah
                    </a>

                    <a href="<?php echo site_url('peminjaman_buku/delete/' . $peminjaman_buku['peminjaman_id']); ?>">
                        Hapus
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>