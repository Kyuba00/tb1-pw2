<h1><?php echo $judul ?></h1>

<!--$data_peminjaman_buku_single['peminajaman_id'] : perlu diletakan di url agar bisa diterima/tangkap pada controller (sbg penanda id yang akan diupdate) -->
<form method="post" action="<?php echo site_url('peminjaman_buku/update_submit/' . $data_peminjaman_buku_single['peminjaman_id']); ?>">
    <table class="table table-borderless table-responsive">
        <tr>
            <td>Peminjaman</td>
            <!--$data_peminjaman_buku_single['tanggal_pinjam'] : menampilkan data peminjaman_buku yang dipilih dari database -->
            <td>
                <select name="peminjaman_id" class="custom-select">
                    <?php foreach ($data_peminjaman as $peminjaman) : ?>
                        <?php if ($peminjaman['id'] == $data_peminjaman_buku_single['peminjaman_id']) : ?>
                            <option value="<?php echo $peminjaman['id']; ?>" selected><?php echo $peminjaman['tanggal_pinjam']; ?></option>
                        <?php else : ?>
                            <option value="<?php echo $peminjaman['id']; ?>"><?php echo $peminjaman['tanggal_pinjam']; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Buku</td>
            <!--$data_peminjaman_buku_single['judul'] : menampilkan data peminjaman_buku yang dipilih dari database -->
            <td>
                <select name="buku_id" class="custom-select">
                    <?php foreach ($data_buku as $buku) : ?>
                        <?php if ($buku['id'] == $data_peminjaman_buku_single['buku_id']) : ?>
                            <option value="<?php echo $buku['id']; ?>" selected><?php echo $buku['judul']; ?></option>
                        <?php else : ?>
                            <option value="<?php echo $buku['id']; ?>"><?php echo $buku['judul']; ?></option>
                        <?php endif; ?>
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