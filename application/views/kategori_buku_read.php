<!--link tambah data-->
<a href="<?php echo site_url('kategori_buku/insert'); ?>" class="btn btn-primary">
	<i class="fa fa-plus"> Tambah</i>
</a>
<a href="<?php echo site_url('fakultas/data_export'); ?>" class="btn btn-outline-info" style="float: right;">
	<i class="fa fa-download"> Export Excel</i>
</a>
<br /><br />

<table class="table table-responsive-xl">
	<thead class="table-dark">
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<!--looping data -->
		<?php foreach ($data_kategori_buku as $kategori_buku) : ?>

			<!--cetak data per baris-->
			<tr>
				<td><?php echo $kategori_buku['id']; ?></td>
				<td><?php echo $kategori_buku['nama']; ?></td>
				<td>
					<!--link ubah data (menyertakan id per baris untuk dikirim ke controller)-->
					<a href="<?php echo site_url('kategori_buku/update/' . $kategori_buku['id']); ?>" class="btn btn-secondary">
						<i class="fa fa-edit"> Ubah</i>
					</a>

					<!--link hapus data (menyertakan id per baris untuk dikirim ke controller)-->
					<a href="<?php echo site_url('kategori_buku/delete/' . $kategori_buku['id']); ?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin?')">
						<i class="fa fa-trash-alt"> Hapus</i>
					</a>

				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>

<br /><br />