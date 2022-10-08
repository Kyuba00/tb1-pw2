<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=export_data_fakultas.xls");
?>

<table border="1">
    <thead>
        <tr>
            <th>Tanggal Pinjam</th>
            <th>Judul</th>
        </tr>
    </thead>
    <tbody>
        <!--looping data fakultas-->
        <?php foreach ($data_fakultas as $fakultas) : ?>

            <!--cetak data per baris-->
            <tr>
                <td><?php echo $peminjaman_buku['tanggal_pinjam']; ?></td>
                <td><?php echo $peminjaman_buku['judul']; ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>