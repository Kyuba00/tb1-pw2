<h1><?php echo $judul ?></h1>


<form method="post" action="<?php echo site_url('peminjaman_buku/insert_submit/'); ?>">
    <table class="table table-borderless table-responsive">
        <tr>
            <td>Peminjaman</td>
            <!--$data_peminjaman_buku_single['tanggal_pinjam'] : menampilkan data peminjaman_buku yang dipilih dari database -->
            <td>
                <select name="peminjaman_id" class="custom-select">
                    <?php foreach ($data_peminjaman as $peminjaman) : ?>
                        <option value="<?php echo $peminjaman['id']; ?>">
                            <?php echo $peminjaman['tanggal_pinjam']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Judul</td>
            <!--$data_peminjaman_buku_single['judul'] : menampilkan data peminjaman_buku yang dipilih dari database -->
            <td>
                <select name="buku_id" class="custom-select">
                    <?php foreach ($data_buku as $buku) : ?>
                        <option value="<?php echo $buku['id']; ?>">
                            <?php echo $buku['judul']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
        </tr>
    </table>
</form>