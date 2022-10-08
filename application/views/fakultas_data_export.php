<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=export_data_fakultas.xls");
?>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
        </tr>
    </thead>
    <tbody>
        <!--looping data fakultas-->
        <?php foreach ($data_fakultas as $fakultas) : ?>

            <!--cetak data per baris-->
            <tr>
                <td><?php echo $fakultas['id']; ?></td>
                <td><?php echo $fakultas['nama']; ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>