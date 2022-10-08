<a href="<?php echo site_url('mahasiswa/insert'); ?>" class="btn btn-primary">
	<i class="fa fa-plus"> Tambah</i>
</a>
<a href="<?php echo site_url('fakultas/data_export'); ?>" class="btn btn-outline-info" style="float: right;">
	<i class="fa fa-download"> Export Excel</i>
</a>
<br /><br />

<table class="table table-responsive-xl">
	<thead class="thead-dark">
		<tr>
			<th>NIM</th>
			<th>Fakultas</th>
			<th>Nama</th>
			<th>Gender</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data_mahasiswa as $mahasiswa) : ?>
			<tr>
				<td><?php echo $mahasiswa['nim']; ?></td>
				<td><?php echo $mahasiswa['nama_fakultas']; ?></td>
				<td><?php echo $mahasiswa['nama']; ?></td>
				<td><?php echo $mahasiswa['gender']; ?></td>
				<td>
					<a href="<?php echo site_url('mahasiswa/update/' . $mahasiswa['nim']); ?>" class="btn btn-secondary">
						<i class="fa fa-edit"> Ubah</i>
					</a>

					<a href="<?php echo site_url('mahasiswa/delete/' . $mahasiswa['nim']); ?>" class="btn btn-danger">
						<i class="fa fa-trash-alt"> Hapus</i>
					</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>