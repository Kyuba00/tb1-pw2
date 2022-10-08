<h1><?php echo $judul ?></h1>

<!--$data_peminjaman_single['id'] : perlu diletakan di url agar bisa diterima/tangkap pada controller (sbg penanda id yang akan diupdate) -->
<form method="post" action="<?php echo site_url('peminjaman/update_submit/' . $data_peminjaman_single['id']); ?>">
    <table class="table table-responsive table-borderless">
        <tr>
            <td>ID</td>
            <!--$data_peminjaman_single['id'] : menampilkan data peminjaman yang dipilih dari database -->
            <td><input type="text" name="id" value="<?php echo $data_peminjaman_single['id']; ?>" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" value="<?php echo $data_peminjaman_single['nim']; ?>" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>Tanggal Pinjam</td>
            <td><input type="date" name="tanggal_pinjam" value="<?php echo $data_peminjaman_single['tanggal_pinjam']; ?>" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>Status Pengembalian</td>
            <td><input type="checkbox" name="status_pengembalian" value="<?php echo $data_peminjaman_single['status_pengembalian']; ?>"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
        </tr>
    </table>
</form>