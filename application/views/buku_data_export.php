<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=export_data_fakultas.xls");
?>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Kategori Buku</th>
            <th>Judul</th>
            <th>Stok Tersedia</th>
        </tr>
    </thead>
    <tbody>
        <!--looping data fakultas-->
        <?php foreach ($data_fakultas as $fakultas) : ?>

            <!--cetak data per baris-->
            <tr>
                <td><?php echo $buku['id']; ?></td>
                <td><?php echo $buku['nama_kategori_buku']; ?></td>
                <td><?php echo $buku['judul']; ?></td>
                <td><?php echo number_format($buku['stok_tersedia']); ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>