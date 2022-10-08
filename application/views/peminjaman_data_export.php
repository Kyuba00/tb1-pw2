<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=export_data_fakultas.xls");
?>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Tanggal Pinjam</th>
            <th>Status Pengembalian</th>
        </tr>
    </thead>
    <tbody>
        <!--looping data fakultas-->
        <?php foreach ($data_fakultas as $fakultas) : ?>

            <!--cetak data per baris-->
            <tr>
                <td><?php echo $peminjaman['id']; ?></td>
                <td><?php echo $peminjaman['nim']; ?></td>
                <td><?php echo $peminjaman['tanggal_pinjam']; ?></td>
                <td><?php echo $peminjaman['status_pengembalian']; ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>