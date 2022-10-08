<h1><?php echo $judul ?></h1>


<form method="post" action="<?php echo site_url('peminjaman/insert_submit/'); ?>">
    <table class="table table-borderless table-responsive">
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" value="" required="" class="form-control"></td>
        </tr>
        <tr>
            <td>Tanggal Pinjam</td>
            <td><input type="date" name="tanggal_pinjam" id="" class="form-control"></td>
        </tr>
        <tr>
            <td>Status Pengembalian</td>
            <td>
                <input type="checkbox" name="status_pengembalian" value="sudah"> sudah
                <input type="checkbox" name="status_pengembalian" value="belum"> belum
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Simpan" class="btn btn-primary"></td>
        </tr>
    </table>
</form>