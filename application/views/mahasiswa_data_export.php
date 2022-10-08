<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-disposition: attachment; filename=export_data_fakultas.xls");
?>

<table border="1">
    <thead>
        <tr>
            <th>NIM</th>
            <th>Fakultas</th>
            <th>Nama</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tbody>
        <!--looping data fakultas-->
        <?php foreach ($data_fakultas as $fakultas) : ?>

            <!--cetak data per baris-->
            <tr>
                <td><?php echo $mahasiswa['nim']; ?></td>
                <td><?php echo $mahasiswa['nama_fakultas']; ?></td>
                <td><?php echo $mahasiswa['nama']; ?></td>
                <td><?php echo $mahasiswa['gender']; ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>